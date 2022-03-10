@extends('layout.base')
@section('title','migunaniarchitect - Arsitek')
@section('container')

<!-- toolbar parsial mobile -->
<div id="pdf-meta">
	<div id="pdf-buttons">
		<a class="btn btn-clear text-white" href="{{route('home')}}">
			<i class="fa fa-arrow-left mr-1"></i>
			<span class="d-none d-sm-inline-block">Kembali</span>
		</a>
	</div>
	<div id="pdf-buttons">
		<button id="pdf-prev" class="btn btn-info d-md-none" aria-label="Prev">
		<svg style="width:24px;height:24px" viewBox="0 0 24 24">
				<path fill="currentColor" d="M20,9V15H12V19.84L4.16,12L12,4.16V9H20Z" />
		</svg>
		</button>
		<button id="pdf-next" class="btn btn-info d-md-none" aria-label="Next">
		<svg style="width:24px;height:24px" viewBox="0 0 24 24">
				<path fill="currentColor" d="M4,15V9H12V4.16L19.84,12L12,19.84V15H4Z" />
		</svg>
		</button>
	</div>
	<div id="page-count-container" class="ml-0">
		<span class="d-md-none">
			<span class="d-none d-sm-inline-block">Halaman</span> 
			<div id="pdf-current-page"></div> dari 
			<div id="pdf-total-pages"></div>
		</span>
		<a class="btn btn-outline-light white ml-2" href="{{route('download')}}" >
			<span class="d-none d-sm-inline-block">Unduh </span>
			<svg style="width:24px;height:24px" viewBox="0 0 24 24">
					<path fill="currentColor" d="M5,20H19V18H5M19,9H15V3H9V9H5L12,16L19,9Z" />
			</svg>
		</a>
	</div>
</div>

<!-- main frame -->
<object  class="center-pdf d-none d-md-block" data="{{ asset('document/RAB Rumah Tinggal 2 lantai.pdf') }}" type="application/pdf" height="100%">
    <!-- <embed src="{{ asset('document/RAB Rumah Tinggal 2 lantai.pdf') }}" type="application/pdf">
        <p >This browser does not support PDFs. Please download the PDF to view it: <a href="{{ asset('document/RAB Rumah Tinggal 2 lantai.pdf') }}">Download PDF</a>.</p>
        <button id="show-pdf-button" class="btn btn-info">Lihat Dokumen</button> 
    </embed> -->
</object> 

<!-- mobile frame -->
<div id="pdf-main-container" class="d-block d-md-none">
	<div id="pdf-loader-animation" class="d-md-none">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="currentColor" width="50" height="50">
			<circle stroke="none" cx="6" cy="50" r="6">
				<animateTransform 
					attributeName="transform" 
					dur="1s" 
					type="translate" 
					values="0 15 ; 0 -15; 0 15" 
					repeatCount="indefinite" 
					begin="0.1"/>
			</circle>
			<circle stroke="none" cx="30" cy="50" r="6">
				<animateTransform 
					attributeName="transform" 
					dur="1s" 
					type="translate" 
					values="0 10 ; 0 -10; 0 10" 
					repeatCount="indefinite" 
					begin="0.2"/>
			</circle>
			<circle stroke="none" cx="54" cy="50" r="6">
				<animateTransform 
					attributeName="transform" 
					dur="1s" 
					type="translate" 
					values="0 5 ; 0 -5; 0 5" 
					repeatCount="indefinite" 
					begin="0.3"/>
			</circle>
		</svg>
	</div>
	<div id="pdf-loader">
		<!-- Memuat dokumen... -->
	</div>
	<div id="pdf-contents">
		<canvas id="pdf-canvas" width="2000" ></canvas>
		<div id="page-loader">
			<!-- Memuat halaman... -->
		</div>
	</div>
</div>

<!-- <canvas id="the-canvas"></canvas> -->

@endsection

@section('script')
<script>
//  matikan body scroll
$('body').addClass('overflow-hidden')
// cek heigh layar
var layar = $(window).height();
var _PDF_DOC,
    _CURRENT_PAGE,
    _TOTAL_PAGES,
    _PAGE_RENDERING_IN_PROGRESS = 0,
    _CANVAS = document.querySelector('#pdf-canvas');
// initialize and load the PDF
async function showPDF(pdf_url) {
    document.querySelector("#pdf-loader").style.display = 'block';
    // get handle of pdf document
    try {
        _PDF_DOC = await pdfjsLib.getDocument({ url: pdf_url });
    }
    catch(error) {
        alert(error.message);
    }
    // total pages in pdf
    _TOTAL_PAGES = _PDF_DOC.numPages;
    
    // Hide the pdf loader and show pdf container
    document.querySelector("#pdf-loader").style.display = 'none';
    document.querySelector("#pdf-contents").style.display = 'block';
    document.querySelector("#pdf-total-pages").innerHTML = _TOTAL_PAGES;
    // show the first page
    showPage(1);
}
// load and render specific page of the PDF
async function showPage(page_no) {
    _PAGE_RENDERING_IN_PROGRESS = 1;
    _CURRENT_PAGE = page_no;
    // disable Previous & Next buttons while page is being loaded
    document.querySelector("#pdf-next").disabled = true;
    document.querySelector("#pdf-prev").disabled = true;
    // while page is being rendered hide the canvas and show a loading message
    document.querySelector("#pdf-canvas").style.display = 'none';
    document.querySelector("#page-loader").style.display = 'block';
    // update current page
    document.querySelector("#pdf-current-page").innerHTML = page_no;
    
    // get handle of page
    try {
        var page = await _PDF_DOC.getPage(page_no);
    }
    catch(error) {
        alert(error.message);
    }
    // original width of the pdf page at scale 1
    var pdf_original_width = page.getViewport(1).width;
    
    // as the canvas is of a fixed width we need to adjust the scale of the viewport where page is rendered
    var scale_required = _CANVAS.width / pdf_original_width;
    // get viewport to render the page at required scale
    var viewport = page.getViewport(scale_required);
    // set canvas height same as viewport height
    _CANVAS.height = viewport.height;
    // setting page loader height for smooth experience
    document.querySelector("#page-loader").style.height =  '50'+ '%';
    document.querySelector("#page-loader").style.lineHeight = layar/2+'px';
    // page is rendered on <canvas> element
    var render_context = {
        canvasContext: _CANVAS.getContext('2d'),
        viewport: viewport
    };
        
    // render the page contents in the canvas
    try {
        await page.render(render_context);
    }
    catch(error) {
        alert(error.message);
    }
    _PAGE_RENDERING_IN_PROGRESS = 0;
    // re-enable Previous & Next buttons
    document.querySelector("#pdf-next").disabled = false;
    document.querySelector("#pdf-prev").disabled = false;
    // show the canvas and hide the page loader
    document.querySelector("#pdf-canvas").style.display = 'block';
    document.querySelector("#page-loader").style.display = 'none';
    document.querySelector("#pdf-loader-animation").classList.add("d-none");
}
// // click on "Show PDF" button
// document.querySelector("#show-pdf-button").addEventListener('click', function() {
//     this.style.display = 'none';
//     showPDF('{{ asset('document/RAB Rumah Tinggal 2 lantai.pdf') }}');
// });
//  auto load pdf
showPDF('{{ asset('document/RAB Rumah Tinggal 2 lantai.pdf') }}');
// click on the "Previous" page button
document.querySelector("#pdf-prev").addEventListener('click', function() {
    if(_CURRENT_PAGE != 1)
        showPage(--_CURRENT_PAGE);
});
// click on the "Next" page button
document.querySelector("#pdf-next").addEventListener('click', function() {
    if(_CURRENT_PAGE != _TOTAL_PAGES)
        showPage(++_CURRENT_PAGE);
});
</script>

@endsection
