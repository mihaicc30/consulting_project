@extends ('layout') @section('content')

<span :class="{ 'hidden': !isActive }"></span>
<div class="grow">
    <!-- Hero START -->
    <div class="relative flex flex-col h-100 overflow-hidden">
        <video
            src="../storage/herovideo.mp4"
            class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center"
            loop
            muted
            autoplay
        ></video>
        <div class="overlay relative flex flex-col">
            <!-- Heading - START -->
            <div class="my-8 text-center">
                <h1 class="font-bold text-3xl">Packages Today</h1>
            </div>
            <!-- Heading - END -->
        </div>
    </div>
    <!-- Hero END -->
    <!-- Content START -->
    <div class="grid grid-cols-2 gap-2 mt-8 mx-4">
        <div class="grid grid-cols-2 bg-gray-200 rounded">
            <div class="flex justify-center items-center">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15 15l6-6m0 0l-6-6m6 6H9a6 6 0 000 12h3"
                    />
                </svg>
            </div>
            <div class="bg-gray-300 text-center rounded">
                <h2 class="font-semibold text-3xl mt-4">Received Packages</h2>
                <p class="mx-6">
                    Explore the files you've received and gain insights into
                    your delivered content, ensuring your connections stay
                    strong and your information is always up to date.
                </p>

                <div
                    class="flex justify-center items-center p-4 mx-4 my-4 rounded-lg bg-gray-500"
                >
                    <p class="text-white">RECEIVED PACKAGES</p>
                    <div
                        class="w-10 h-10 ml-4 flex justify-center items-center rounded-full bg-blue-500 text-white"
                    >
                        {{ $receivedPackages }}
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 bg-gray-200 rounded">
            <div class="flex justify-center items-center">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3"
                    />
                </svg>
            </div>
            <div class="bg-gray-300 text-center rounded">
                <h2 class="font-semibold text-3xl mt-4">Sent Packages</h2>
                <p class="mx-6">
                    Review your sent packages to stay informed about the content
                    you've shared with others. Monitor your sent files' journey
                    and ensure seamless communication with your contacts for a
                    successful exchange of information.
                </p>

                <div
                    class="flex justify-center items-center p-4 mx-4 my-4 rounded-lg bg-gray-500"
                >
                    <p class="text-white">SENT PACKAGES</p>
                    <div
                        class="w-10 h-10 ml-4 flex justify-center items-center rounded-full bg-blue-500 text-white"
                    >
                        {{ $sentPackages }}
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 bg-gray-200 rounded">
            <div class="flex justify-center items-center">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75"
                    />
                </svg>
            </div>
            <div class="bg-gray-300 text-center rounded">
                <h2 class="font-semibold text-3xl mt-4">Viewed Packages</h2>
                <p class="mx-6">
                    Stay in the loop by keeping track of viewed packages. Gain
                    insights into which of your files have been accessed and
                    when, enhancing your understanding of engagement and
                    fostering effective communication.
                </p>

                <div
                    class="flex justify-center items-center p-4 mx-4 my-4 rounded-lg bg-gray-500"
                >
                    <p class="text-white">VIEWED PACKAGES</p>
                    <div
                        class="w-10 h-10 ml-4 flex justify-center items-center rounded-full bg-blue-500 text-white"
                    >
                        {{ $viewedPackages }}
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 bg-gray-200 rounded">
            <div class="flex justify-center items-center">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75"
                    />
                </svg>
            </div>
            <div class="bg-gray-300 text-center rounded">
                <h2 class="font-semibold text-3xl mt-4">All Packages</h2>
                <p class="mx-6">
                    Manage your packages comprehensively with our package
                    tracking system. Explore received, sent, and viewed packages
                    to ensure smooth interactions, reliable exchanges, and an
                    organized overview of your digital communication.
                </p>

                <div
                    class="flex justify-center items-center p-4 mx-4 my-4 rounded-lg bg-gray-500"
                >
                    <p class="text-white">ALL PACKAGES</p>
                    <div
                        class="w-10 h-10 ml-4 flex justify-center items-center rounded-full bg-blue-500 text-white"
                    >
                        {{ $totalPackages }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
