@extends ('layout')


@section('content')
<!-- Hero START -->
<div class="relative flex flex-col h-100 overflow-hidden">
  <video src="storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
  <div class="overlay relative flex flex-col">
    <!-- Heading - START -->
    <div class="my-8 text-center">
      <h1 class="font-bold text-3xl">About Us</h1>
      <p>We Fight Passionately to Get Our Clients Every Time They Deserve.</p>
    </div>
    <!-- Heading - END -->
  </div>
</div>

<!-- Hero END -->

<!-- Who Are We START -->
<div class="flex flex-col text-center mt-12">
    <h1 class="text-xl font-bold underline decoration-[--c2]">-Who are we-</h1>
    <p class="text-xs">Origins</p>
    <div class="flex max-md:flex-col max-md:items-center max-md:text-center gap-2 m-auto justify-center py-2">
        <div class="flex flex-col justify-center basis-1/2 gap-4">
            <div class="grid grid-cols-[100px,1fr] items-center">
                <svg width="64px" height="64px" viewBox="-302.16 -302.16 1863.32 1863.32" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#ff6600" stroke="#ff6600" stroke-width="0.01259"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M393.644285 971.514095l472.373142 0 0 52.485905-472.373142 0 0-52.485905Z" fill="#4d2900"></path><path d="M524.859047 652.399795h209.943618v345.357253h-209.943618z" fill="#f08000"></path><path d="M708.559713 678.642747V970.989236h-157.457714V678.642747h157.457714m52.485905-52.485904H498.616094V1023.475141h262.429524V626.156843z" fill="#4d2900"></path><path d="M26.242952 26.242952l1207.175808 0 0 734.802666-1207.175808 0 0-734.802666Z" fill="#FDCA89"></path><path d="M1207.175807 52.485905v682.31676H52.485905V52.485905h1154.689902m0-52.485905H52.485905a52.485905 52.485905 0 0 0-52.485905 52.485905v682.31676a52.485905 52.485905 0 0 0 52.485905 52.485905h1154.689902a52.485905 52.485905 0 0 0 52.485905-52.485905V52.485905a52.485905 52.485905 0 0 0-52.485905-52.485905z" fill="#4d2900"></path><path d="M52.485905 763.669913a26.242952 26.242952 0 0 1-26.242953-26.242952v-100.510508h1207.175808v100.248078a26.242952 26.242952 0 0 1-26.242953 26.242952z" fill="#f08000"></path><path d="M1207.175807 663.159405v74.267556H52.485905v-74.267556h1154.689902m52.485905-52.485904H0v126.49103a52.485905 52.485905 0 0 0 52.485905 52.485905h1154.689902a52.485905 52.485905 0 0 0 52.485905-52.485905v-126.49103z" fill="#4d2900"></path></g></svg>
                <p class="text-xs text-start">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit iste maiores possimus nemo eveniet esse impedit praesentium, soluta reprehenderit quidem.</p>
            </div>
            <div class="grid grid-cols-[100px,1fr] items-center">
                <svg width="64px" height="64px" viewBox="-302.16 -302.16 1863.32 1863.32" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#ff6600" stroke="#ff6600" stroke-width="0.01259"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M393.644285 971.514095l472.373142 0 0 52.485905-472.373142 0 0-52.485905Z" fill="#4d2900"></path><path d="M524.859047 652.399795h209.943618v345.357253h-209.943618z" fill="#f08000"></path><path d="M708.559713 678.642747V970.989236h-157.457714V678.642747h157.457714m52.485905-52.485904H498.616094V1023.475141h262.429524V626.156843z" fill="#4d2900"></path><path d="M26.242952 26.242952l1207.175808 0 0 734.802666-1207.175808 0 0-734.802666Z" fill="#FDCA89"></path><path d="M1207.175807 52.485905v682.31676H52.485905V52.485905h1154.689902m0-52.485905H52.485905a52.485905 52.485905 0 0 0-52.485905 52.485905v682.31676a52.485905 52.485905 0 0 0 52.485905 52.485905h1154.689902a52.485905 52.485905 0 0 0 52.485905-52.485905V52.485905a52.485905 52.485905 0 0 0-52.485905-52.485905z" fill="#4d2900"></path><path d="M52.485905 763.669913a26.242952 26.242952 0 0 1-26.242953-26.242952v-100.510508h1207.175808v100.248078a26.242952 26.242952 0 0 1-26.242953 26.242952z" fill="#f08000"></path><path d="M1207.175807 663.159405v74.267556H52.485905v-74.267556h1154.689902m52.485905-52.485904H0v126.49103a52.485905 52.485905 0 0 0 52.485905 52.485905h1154.689902a52.485905 52.485905 0 0 0 52.485905-52.485905v-126.49103z" fill="#4d2900"></path></g></svg>
                <p class="text-xs text-start">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit iste maiores possimus nemo eveniet esse impedit praesentium, soluta reprehenderit quidem.</p>
            </div>
            <div class="grid grid-cols-[100px,1fr] items-center">
                <svg width="64px" height="64px" viewBox="-302.16 -302.16 1863.32 1863.32" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#ff6600" stroke="#ff6600" stroke-width="0.01259"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M393.644285 971.514095l472.373142 0 0 52.485905-472.373142 0 0-52.485905Z" fill="#4d2900"></path><path d="M524.859047 652.399795h209.943618v345.357253h-209.943618z" fill="#f08000"></path><path d="M708.559713 678.642747V970.989236h-157.457714V678.642747h157.457714m52.485905-52.485904H498.616094V1023.475141h262.429524V626.156843z" fill="#4d2900"></path><path d="M26.242952 26.242952l1207.175808 0 0 734.802666-1207.175808 0 0-734.802666Z" fill="#FDCA89"></path><path d="M1207.175807 52.485905v682.31676H52.485905V52.485905h1154.689902m0-52.485905H52.485905a52.485905 52.485905 0 0 0-52.485905 52.485905v682.31676a52.485905 52.485905 0 0 0 52.485905 52.485905h1154.689902a52.485905 52.485905 0 0 0 52.485905-52.485905V52.485905a52.485905 52.485905 0 0 0-52.485905-52.485905z" fill="#4d2900"></path><path d="M52.485905 763.669913a26.242952 26.242952 0 0 1-26.242953-26.242952v-100.510508h1207.175808v100.248078a26.242952 26.242952 0 0 1-26.242953 26.242952z" fill="#f08000"></path><path d="M1207.175807 663.159405v74.267556H52.485905v-74.267556h1154.689902m52.485905-52.485904H0v126.49103a52.485905 52.485905 0 0 0 52.485905 52.485905h1154.689902a52.485905 52.485905 0 0 0 52.485905-52.485905v-126.49103z" fill="#4d2900"></path></g></svg>
                <p class="text-xs text-start">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit iste maiores possimus nemo eveniet esse impedit praesentium, soluta reprehenderit quidem.</p>
            </div>
        </div>
        <div class="basis-1/3">
            <img src="storage/6.png" alt="">
        </div>
    </div>
    
</div>
<!-- Who Are We END -->


<!-- Why Us START -->
<div class="flex flex-col text-center mt-12">
    <h1 class="text-xl font-bold  underline decoration-[--c2]">-Why Choose Us-</h1>
    <p class="text-xs">Attributes</p>
    <div
        class="grid grid-cols-4 max-md:grid-cols-2 max-[330px]:grid-cols-1 my-4 gap-2 py-6"
    >
        <div class="p-4 border-2">
            <svg class="mx-auto" height="100px" width="100px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-50.52 -50.52 606.21 606.21" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#FFC44D;" d="M217.6,243.2c17.92,2.56,17.92,25.6,17.92,25.6v153.6c0,17.067-8.533,34.133-25.6,51.2 c-17.067,17.067-42.667,25.6-42.667,25.6H22.187l102.4-76.8c8.533-5.12,15.36-23.04,17.067-34.133l25.6-170.667 c17.067-85.333,25.6-145.067,51.2-145.067c12.8,0,17.067,3.413,17.067,17.067c0,17.067-10.24,148.48-11.093,154.453L217.6,243.2z M280.747,245.76L280.747,245.76c0-0.853-11.093-139.093-11.093-156.16c0-13.653,4.267-17.067,17.067-17.067 c25.6,0,34.133,59.733,51.2,145.067l25.6,170.667c2.56,10.24,8.533,28.16,17.067,34.133l102.4,76.8H337.92 c0,0-25.6-8.533-42.667-25.6c-17.067-17.067-25.6-34.133-25.6-51.2V268.8C269.653,268.8,269.653,251.733,280.747,245.76z"></path> <path style="fill:#ff7300;" d="M337.92,503.467c-0.853,0-0.853,0-1.707,0c-0.853,0-26.453-9.387-44.373-26.453 c-17.92-17.92-26.453-35.84-26.453-54.613V268.8c0-10.24,5.12-29.867,25.6-29.867s25.6,28.16,25.6,29.013l8.533,110.933 c0,2.56-1.707,4.267-4.267,4.267s-4.267-1.707-4.267-4.267l-8.533-110.933l0,0c0,0-4.267-21.333-17.067-21.333 c-17.067,0-17.067,20.48-17.067,21.333v153.6c0,16.213,8.533,32.427,24.747,47.787c16.213,16.213,40.96,24.747,40.96,24.747 c2.56,0.853,3.413,3.413,2.56,5.12C341.333,502.613,339.627,503.467,337.92,503.467z M167.253,503.467 c-1.707,0-3.413-0.853-4.267-2.56c-0.853-2.56,0.853-4.267,2.56-5.12c0,0,24.747-8.533,40.96-24.747 c16.213-16.213,24.747-32.427,24.747-47.787v-153.6c0-0.853,0-21.333-17.067-21.333c-12.8,0-17.067,22.187-17.067,22.187 l-8.533,110.933c0,2.56-2.56,4.267-4.267,4.267c-2.56,0-4.267-2.56-4.267-4.267l8.533-110.933c0-1.707,5.12-29.867,25.6-29.867 s25.6,19.627,25.6,29.867v153.6c0,17.92-9.387,36.693-26.453,54.613c-17.92,17.92-43.52,26.453-44.373,26.453 C168.107,503.467,168.107,503.467,167.253,503.467z M482.987,503.467c-0.853,0-1.707,0-2.56-0.853l-102.4-76.8 c-10.24-6.827-16.213-26.453-18.773-36.693l-25.6-170.667c-1.707-9.387-3.413-17.92-5.12-26.453 c-12.8-64-22.187-114.347-41.813-114.347c-11.093,0-12.8,1.707-12.8,12.8c0,17.067,8.533,126.293,8.533,128 c0,2.56-1.707,4.267-4.267,4.267s-4.267-1.707-4.267-4.267c0-4.267-8.533-110.933-8.533-128c0-15.36,5.973-21.333,21.333-21.333 c26.453,0,34.987,46.08,50.347,121.173c1.707,8.533,3.413,17.92,5.12,27.307l25.6,170.667c2.56,11.093,8.533,26.453,15.36,31.573 l102.4,76.8c1.707,1.707,2.56,4.267,0.853,5.973C485.547,502.613,484.693,503.467,482.987,503.467z M22.187,503.467 c-1.707,0-2.56-0.853-3.413-1.707c-1.707-1.707-0.853-4.267,0.853-5.973l102.4-76.8c6.827-4.267,13.653-20.48,15.36-31.573 l25.6-170.667c1.707-9.387,3.413-18.773,5.12-27.307C182.613,113.493,192,68.266,218.453,68.266c15.36,0,21.333,5.973,21.333,21.333 c0,17.067-8.533,123.733-8.533,128c0,2.56-2.56,4.267-4.267,4.267c-2.56,0-4.267-2.56-4.267-4.267c0-0.853,8.533-110.933,8.533-128 c0-11.093-1.707-12.8-12.8-12.8c-19.627,0-29.013,50.347-41.813,114.347c-1.707,8.533-3.413,17.92-5.12,27.307l-25.6,170.667 c-1.707,11.093-8.533,30.72-18.773,36.693l-102.4,76.8C23.893,503.467,23.04,503.467,22.187,503.467z M466.773,379.733 c-0.853,0-1.707,0-2.56-0.853l-60.587-34.987c-1.707-0.853-2.56-3.413-1.707-5.973c0.853-1.707,3.413-2.56,5.973-1.707L468.48,371.2 c1.707,0.853,2.56,3.413,1.707,5.973C470.187,378.88,468.48,379.733,466.773,379.733z M38.4,379.733c-1.707,0-2.56-0.853-3.413-2.56 c-0.853-1.707-0.853-4.267,1.707-5.973l60.587-34.987c1.707-0.853,4.267-0.853,5.973,1.707c0.853,1.707,0.853,4.267-1.707,5.973 L40.96,378.88C40.107,379.733,39.253,379.733,38.4,379.733z M500.053,256h-102.4c-2.56,0-4.267-1.707-4.267-4.267 c0-2.56,1.707-4.267,4.267-4.267h102.4c2.56,0,4.267,1.707,4.267,4.267C504.32,254.293,502.613,256,500.053,256z M107.52,256 L107.52,256H5.12c-2.56,0-4.267-1.707-4.267-4.267c0-2.56,1.707-4.267,4.267-4.267l0,0h102.4c2.56,0,4.267,1.707,4.267,4.267 C111.787,254.293,110.08,256,107.52,256z M380.587,181.76c-1.707,0-2.56-0.853-3.413-2.56c-0.853-1.707-0.853-4.267,1.707-5.973 l86.187-49.493c1.707-0.853,4.267-0.853,5.973,1.707c0.853,1.707,0.853,4.267-1.707,5.973l-86.187,49.493 C382.293,181.76,381.44,181.76,380.587,181.76z M124.587,181.76c-0.853,0-1.707,0-1.707-0.853l-86.187-49.493 c-1.707-0.853-2.56-3.413-1.707-5.973c0.853-1.707,3.413-2.56,5.973-1.707l86.187,49.493c1.707,0.853,2.56,3.413,1.707,5.973 C127.147,181.76,126.293,181.76,124.587,181.76z M354.987,78.507c-0.853,0-1.707,0-2.56-0.853c-1.707-0.853-2.56-3.413-1.707-5.973 l21.333-36.693c0.853-1.707,3.413-2.56,5.973-1.707c1.707,0.853,2.56,3.413,1.707,5.973L358.4,75.947 C357.547,77.653,356.693,78.507,354.987,78.507z M150.187,78.507c-1.707,0-2.56-0.853-3.413-2.56L125.44,39.254 c-0.853-1.707-0.853-4.267,1.707-5.973c1.707-0.853,4.267-0.853,5.973,1.707l21.333,36.693c0.853,1.707,0.853,4.267-1.707,5.973 C151.893,78.507,151.04,78.507,150.187,78.507z M252.587,34.133c-2.56,0-4.267-1.707-4.267-4.267v-25.6 c0-2.56,1.707-4.267,4.267-4.267s4.267,1.707,4.267,4.267v25.6C256.853,32.427,255.147,34.133,252.587,34.133z"></path> </g></svg>
            <h2 class="text-xl font-bold">Users</h2>
            <p>22k+</p>
            <p>Join our community and experience the benefits of our services.</p>
        </div>
        <div class="p-4 border-2">
            <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" viewBox="-45.5 -45.5 546.01 546.01" xml:space="preserve" width="100px" height="100px" fill="#000000" stroke="#000000" stroke-width="0.0045501"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <rect x="118.145" y="296.859" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 472.3967 413.0449)" style="fill:#ff7300;" width="65.018" height="15"></rect> <path style="fill:#ffa629;" d="M405.217,290.221c-66.391,66.391-174.033,66.391-240.425,0l103.34-137.084l137.084-103.34 C471.608,116.188,471.608,223.829,405.217,290.221z"></path> <path style="fill:#ffbf00;" d="M405.217,49.796L164.792,290.221c-66.391-66.391-66.391-174.033,0-240.425 S338.825-16.595,405.217,49.796z"></path> <path style="fill:#FFF1CF;" d="M380.464,74.549L189.545,265.468c52.721,52.721,138.198,52.721,190.919,0 S433.185,127.27,380.464,74.549z"></path> <path style="fill:#FFFFFF;" d="M362.786,247.79c52.721-52.721,60.635-130.284,17.678-173.241 c-52.721-52.721-138.198-52.721-190.919,0s-52.721,138.198,0,190.919C232.503,308.425,310.065,300.511,362.786,247.79z"></path> <polygon style="fill:#ff7300;" points="94.081,332.643 87.01,367.998 122.365,360.927 150.649,332.643 122.365,304.359 "></polygon> <polygon style="fill:#ff7300;" points="94.081,332.643 0,426.724 14.142,440.866 68.253,400.897 108.223,346.785 "></polygon> <rect x="1.728" y="390.896" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -263.4856 165.6825)" style="fill:#ff7300;" width="133.05" height="20"></rect> <path style="fill:#E44670;" d="M326.978,98.417c-1.953,0-3.873,0.12-5.76,0.349l-36.153,163.8 C287.793,261.061,375,212.635,375,146.439C375,119.919,353.498,98.417,326.978,98.417z"></path> <path style="fill:#ff7300;" d="M321.218,98.766c18.011,2.88,31.964,23.127,31.964,47.673c0,66.033-65.749,114.393-68.116,116.127 c-0.044,0.022-0.065,0.033-0.065,0.033s-90-48.916-90-116.16c0-26.52,21.491-48.022,48.011-48.022 c18.087,0,33.796,10.015,41.989,24.775C292.298,110.024,305.596,100.632,321.218,98.766z"></path> </g> </g></svg>
            <h2 class="text-xl font-bold">Satisfaction</h2>
            <p>100%</p>
            <p>Striving to deliver exceptional service that exceeds our clients' expectations, resulting in a 100% satisfaction rate.</p>
        </div>
        <div class="p-4 border-2">
            <svg class="mx-auto" width="100px" height="100px" viewBox="-8.21 -8.21 98.56 98.56" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="star_gold_orange" data-name="star gold orange" transform="translate(-462.47 -619.736)"> <rect id="Rectangle_18" data-name="Rectangle 18" width="0.003" height="0.004" transform="translate(503.588 662.924) rotate(-29.055)" fill="gray"></rect> <rect id="Rectangle_19" data-name="Rectangle 19" width="0.002" height="0.002" transform="translate(503.591 662.923)" fill="gray"></rect> <path id="Path_72" data-name="Path 72" d="M503.592,662.926Z" fill="gray"></path> <path id="Path_73" data-name="Path 73" d="M503.592,662.923v0l41.02-13.494-27.587-5.138-13.433,18.629Z" fill="#f9c543"></path> <rect id="Rectangle_20" data-name="Rectangle 20" width="0.002" height="0.002" transform="translate(503.591 662.925)" fill="gray"></rect> <path id="Path_74" data-name="Path 74" d="M503.592,662.923Z" fill="gray"></path> <path id="Path_75" data-name="Path 75" d="M525.465,669.942l19.147-20.51-41.02,13.494Z" fill="#fdb53f"></path> <path id="Path_76" data-name="Path 76" d="M503.592,662.923Z" fill="gray"></path> <path id="Path_77" data-name="Path 77" d="M481.772,670.1,478.33,697.95l25.256-35.023Z" fill="#f9c543"></path> <path id="Path_78" data-name="Path 78" d="M503.586,662.926,478.33,697.95l25.345-12.057-.083-22.967Z" fill="#ff7300"></path> <path id="Path_79" data-name="Path 79" d="M517.025,644.294l-13.588-24.559.155,43.188Z" fill="#ff7300"></path> <path id="Path_80" data-name="Path 80" d="M503.592,662.926h0L529.1,697.77l-3.632-27.828Z" fill="#ff7300"></path> <path id="Path_81" data-name="Path 81" d="M503.592,662.926l.083,22.967L529.1,697.77l-25.505-34.844Z" fill="#fdb53f"></path> <path id="Path_82" data-name="Path 82" d="M503.592,662.923h0l-.155-43.187-13.416,24.652,13.57,18.535Z" fill="#f9c543"></path> <path id="Path_83" data-name="Path 83" d="M490.021,644.388l-27.551,5.336,41.122,13.2Z" fill="#fdb53f"></path> <path id="Path_84" data-name="Path 84" d="M503.592,662.923h0l-41.122-13.2,19.3,20.375,21.814-7.173Z" fill="#ff7300"></path> </g> </g></svg>
            <h2 class="text-xl font-bold">Reviews</h2>
            <p>4.9/5</p>
            <p>We are proud of the positive feedback and continuously work to maintain our high standards.</p>
        </div>
        <div class="p-4 border-2">
            <svg width="100px" height="100px" class="mx-auto" viewBox="-6.4 -6.4 76.80 76.80" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" fill="#000000" stroke="#000000" stroke-width="0.256"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style> .cls-1 { fill: #e7ecef; } .cls-2 { fill: #8b8c89; } .cls-3 { fill: #FFC44D; } .cls-4 { fill: #FFC44D; } .cls-5 { fill: #ffbe8a; } .cls-6 { fill: #ff8f33; } .cls-7 { fill: #ff8f33; } </style></defs><path class="cls-4" d="M30.86,28.86c.33-.23,.72-.36,1.14-.36,1.1,0,2,.9,2,2s-.9,2-2,2c-.36,0-.71-.1-1-.27v1.45c0,.34-.17,.64-.43,.83,3.23,3.09,7.61,4.99,12.43,4.99,9.94,0,18-8.06,18-18S52.94,3.5,43,3.5s-17.91,7.97-18,17.84c1.15,.5,2.19,1.21,3.07,2.09,1.44,1.44,2.45,3.32,2.79,5.43Z"></path><path class="cls-5" d="M25.58,39.54l-3,1.29c-1.01,.43-2.15,.43-3.15,0l-3-1.29c-1.47-.63-2.42-2.08-2.42-3.68v-5.36c0-3.31,2.69-6,6-6h2c3.31,0,6,2.69,6,6v5.36c0,1.6-.95,3.05-2.42,3.68Z"></path><path class="cls-7" d="M34.14,45.5c-1.82-1.85-4.35-3-7.14-3h-3c0,1.66-1.34,3-3,3s-3-1.34-3-3h-3c-5.52,0-10,4.48-10,10v7H27l4-14h3.14Z"></path><path class="cls-5" d="M16,55.5h2c1.1,0,2,.9,2,2v2h-4v-4h0Z"></path><path class="cls-7" d="M11,32.23c-.29,.17-.64,.27-1,.27-1.1,0-2-.9-2-2s.9-2,2-2c.42,0,.81,.13,1.14,.36"></path><path class="cls-7" d="M31,32.23c.29,.17,.64,.27,1,.27,1.1,0,2-.9,2-2s-.9-2-2-2c-.42,0-.81,.13-1.14,.36"></path><path class="cls-3" d="M18,40.21l1.42,.61c1.01,.44,2.15,.44,3.16,0l1.42-.61v2.29c0,1.66-1.34,3-3,3s-3-1.34-3-3v-2.29Z"></path><polyline class="cls-2" points="27 59.5 31 45.5 53 45.5 49 59.5"></polyline><path class="cls-7" d="M27.4,27.88h-.01c-.57-.23-1.23-.38-2.06-.38-4.33,0-4.33,4-8.67,4-1.13,0-1.97-.27-2.66-.67v-.33c0-3.31,2.69-6,6-6h2c2.37,0,4.42,1.38,5.39,3.38h.01Z"></path><path class="cls-1" d="M28,35.1v-4.6c0-3.31-2.69-6-6-6h-2c-3.31,0-6,2.69-6,6v4h-2c-.55,0-1-.45-1-1v-3c0-5.52,4.48-10,10-10,2.76,0,5.26,1.12,7.07,2.93s2.93,4.31,2.93,7.07v3.18c0,.48-.34,.89-.8,.98l-2.2,.44Z"></path><path class="cls-4" d="M40,51.5c.55,0,1,.45,1,1s-.45,1-1,1v-2Z"></path><path class="cls-6" d="M21,59.5h-2v-2c0-.55-.45-1-1-1h-7c-.55,0-1-.45-1-1v-4c0-.27,.11-.52,.29-.71l2-2,1.41,1.41-1.71,1.71v2.59h6c1.65,0,3,1.35,3,3v2Z"></path><rect class="cls-4" height="2" width="50" x="3" y="58.5"></rect><path class="cls-6" d="M37.02,38.47c-1.44-.5-2.78-1.18-4.02-2.01,4.82-3.22,8-8.72,8-14.96,0-1.1,.9-2,2-2s2,.9,2,2c0,6.83-3.11,12.93-7.99,16.98h.01Z"></path><path class="cls-6" d="M47.39,38.95h0c-1.41,.36-2.88,.55-4.39,.55-.41,0-.82-.01-1.22-.04,4.48-4.66,7.22-10.99,7.22-17.96,0-3.31-2.69-6-6-6s-6,2.69-6,6-1.13,6.3-3.03,8.69c0,0,0,0,0,0h0c-.15-.97-.98-1.7-1.97-1.7-.42,0-.81,.13-1.14,.36-.05-.32-.11-.63-.2-.94,1.46-1.74,2.34-3.98,2.34-6.42,0-5.52,4.48-10,10-10s10,4.48,10,10c0,6.51-2.08,12.54-5.61,17.46"></path><path class="cls-6" d="M28.5,23.89c.32-.73,.5-1.54,.5-2.39,0-7.73,6.27-14,14-14s14,6.27,14,14c0,5.14-1.14,10.02-3.18,14.38,4.36-3.28,7.18-8.5,7.18-14.38,0-9.94-8.06-18-18-18s-17.91,7.97-18,17.84c1.15,.5,2.19,1.21,3.07,2.09,.15,.15,.29,.3,.43,.46Z"></path><path class="cls-7" d="M21,36.5h0c-.11-.54,.24-1.07,.78-1.18l8.22-1.64v-2.86c0-4.79-3.61-8.98-8.38-9.3-5.24-.35-9.62,3.81-9.62,8.98v3h2v2h-2c-1.1,0-2-.9-2-2v-2.68c0-5.72,4.24-10.74,9.94-11.27,6.54-.62,12.06,4.53,12.06,10.95v3.18c0,.95-.67,1.77-1.61,1.96l-8.22,1.64c-.54,.11-1.07-.24-1.18-.78Z"></path></g></svg>
            <h2 class="text-xl font-bold">Security</h2>
            <p>100%</p>
            <p>We implement robust security measures to safeguard your information, giving you peace of mind.</p>
        </div>
    </div>
</div>
<!-- Why Us END -->


<!-- Support START -->
<div class="relative flex flex-col h-fit mt-12 bg-[url('/storage/8.jpg')]">
    <div class="overlay z-20 inset-0 flex flex-col relative">
        <span
            class="flex flex-wrap text-xl font-bold mx-auto mt-8 gap-2 max-[350px]:flex-col max-[350px]:items-center underline decoration-[--c2]"
        >
            -<span class="whitespace-normal">Best Technical</span
            ><span class="whitespace-normal">Support 24/7</span>-
        </span>
        <p class="text-xs mx-auto">Support and Guidance</p>
        <div
            class="grid grid-cols-2 max-sm:grid-cols-1 m-auto justify-center py-6"
        >
            <div
                class="flex text-white flex-col justify-center basis-1/2 gap-4 mx-8"
            >
                <p class="font-[600]">Anything. Anywhere. Anytime.</p>
                <p class="text-sm">
                    EZEPOST can assist you in regaining crucial time. We are here to assist you in determining the root cause of those recurring issues and determining the best strategy to prevent them from recurring in the future. IT Support difficulties can have a significant impact on your day-to-day operations, and your present IT personnel may not always be proactive. So, whether your firm need occasional remote IT help or outsources all of its IT services, we have a solution that provides flexible, cost-effective, and personalised technical support.
                </p>
                <p class="font-bold">Call Us : 12345-123-123</p>
                <p class="font-bold">Email Us : email@emai.email</p>
            </div>
            <div class="basis-1/3">
                <img src="storage/3.png" class="m-auto" />
            </div>
        </div>
    </div>
</div>
<!-- Support END -->

<!-- Our Specialists START -->
<div class="flex flex-col text-center mt-12">

    <h1 class="text-xl font-bold underline decoration-[--c2]">-Our Executive Team-</h1>
    <p class="text-xs">Our Specialists</p>

    <div class="grid lg:grid-cols-3 md:grid-cols-2 max-sm:grid-cols-1 p-4">
        <!-- Team Member Card START -->
        <div class="flex flex-col justify-center items-center p-4 m-2 shadow-xl">
            <img src="https://randomuser.me/api/portraits/men/11.jpg" alt="avatar" class="h-12 rounded-full w-auto">
            <p class="text-lg font-bold">Some Name</p>
            <p title="Position text-xs">Backend Developer</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente quas, nesciunt fugit culpa quisquam natus esse beatae. Tempora, aspernatur in?</p>
        </div>
        <!-- Team Member Card END -->
        <!-- Team Member Card START -->
        <div class="flex flex-col justify-center items-center p-4 m-2 shadow-xl">
            <img src="https://randomuser.me/api/portraits/men/11.jpg" alt="avatar" class="h-12 rounded-full w-auto">
            <p class="text-lg font-bold">Some Name</p>
            <p title="Position text-xs">Frontend Developer</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente quas, nesciunt fugit culpa quisquam natus esse beatae. Tempora, aspernatur in?</p>
        </div>
        <!-- Team Member Card END -->
        <!-- Team Member Card START -->
        <div class="flex flex-col justify-center items-center p-4 m-2 shadow-xl">
            <img src="https://randomuser.me/api/portraits/men/11.jpg" alt="avatar" class="h-12 rounded-full w-auto">
            <p class="text-lg font-bold">Some Name</p>
            <p title="Position text-xs">UX/UI Designer</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente quas, nesciunt fugit culpa quisquam natus esse beatae. Tempora, aspernatur in?</p>
        </div>
        <!-- Team Member Card END -->
        <!-- Team Member Card START -->
        <div class="flex flex-col justify-center items-center p-4 m-2 shadow-xl">
            <img src="https://randomuser.me/api/portraits/men/11.jpg" alt="avatar" class="h-12 rounded-full w-auto">
            <p class="text-lg font-bold">Some Name</p>
            <p title="Position text-xs">UX Writer</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente quas, nesciunt fugit culpa quisquam natus esse beatae. Tempora, aspernatur in?</p>
        </div>
        <!-- Team Member Card END -->
        <!-- Team Member Card START -->
        <div class="flex flex-col justify-center items-center p-4 m-2 shadow-xl">
            <img src="https://randomuser.me/api/portraits/men/11.jpg" alt="avatar" class="h-12 rounded-full w-auto">
            <p class="text-lg font-bold">Some Name</p>
            <p title="Position text-xs">UX engineer</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente quas, nesciunt fugit culpa quisquam natus esse beatae. Tempora, aspernatur in?</p>
        </div>
        <!-- Team Member Card END -->
        <!-- Team Member Card START -->
        <div class="flex flex-col justify-center items-center p-4 m-2 shadow-xl">
            <img src="https://randomuser.me/api/portraits/men/11.jpg" alt="avatar" class="h-12 rounded-full w-auto">
            <p class="text-lg font-bold">Some Name</p>
            <p title="Position text-xs">Information Architect</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente quas, nesciunt fugit culpa quisquam natus esse beatae. Tempora, aspernatur in?</p>
        </div>
        <!-- Team Member Card END -->
    </div>
</div> 
<!-- Our Specialists END -->

@endsection