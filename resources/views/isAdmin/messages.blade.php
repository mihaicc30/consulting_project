@extends ('layout')

@section('content')

<!-- to fetch from db later -->


<span :class="{ 'hidden': !isActive }"></span>
<div :class="{ 'col-span-2': !isActive }" x-data="{ isModal: false }">

  <!-- Hero START -->
  <div class="relative flex flex-col h-100 overflow-hidden">
    <video src="../storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
    <div class="overlay relative flex flex-col">
      <!-- Heading - START -->
      <div class="my-8 text-center">
        <h1 class="font-bold text-3xl">Admin Messages</h1>
      </div>
      <!-- Heading - END -->
    </div>
  </div>
  <!-- Hero END -->

  <!-- Dashboard - START -->
  <div class="grid grid-cols-1 h-[80%] py-6 gap-2 overflow-y-scroll">
    <!-- Messages Header - START -->
    @foreach ($contactMessages as $message)
    <div onclick="setModal('{{ json_encode($message) }}')" @click="isModal = !isModal" class="grid grid-cols-[3fr_10fr] h-[100px] gap-4 hover:scale-[.97] p-2 m-1 shadow-xl transition">
      <p class="text-start flex flex-col line-clamp-2 {{ $message['status'] === 'unread' ? 'font-bold' : '' }}">
        <span class="text-sm line-clamp-1">
          {{ $message['from'] }}</span>
        <span class="text-sm line-clamp-1">
          {{ $message['created_at'] }}</span>
        <span class="capitalize max-[671px]:text-start {{ $message['status'] === 'unread' ? 'font-bold' : '' }}">
          {{ $message['status'] }}</span>
      </p>
      <p class="text-start flex flex-col line-clamp-2 {{ $message['status'] === 'unread' ? 'font-bold' : '' }}">
        <span class="text-sm line-clamp-1">
          {{ $message['message'] }}</span>
      </p>


    </div>
    @endforeach
    <!-- Messages Header - END -->
  </div>
  <!-- Dashboard - END -->


  @include('components.admin-messages-modal')
  <script defer type="application/javascript">
    const setModal = (data) => {
      data = data.replace("\"[", "[").replace("]\"", "]")
      data = JSON.parse(data)
      console.log("🚀 ~ file: messages.blade.php:53 ~ setModal ~ data:", data)

      let modalID = document.getElementById('message_id');
      let modalSendEmail = document.getElementById('ase');
      let modalEmail = document.getElementById('ame');
      let modalDate = document.getElementById('amd');
      let modalStatus = document.getElementById('ams');
      let modalMessage = document.getElementById('amm');
      let modalId = document.getElementById('ami')
      let newSubject = 'New Subject';
      let newBody = 'New message...';

      modalID.value = data.id
      modalEmail.innerHTML = data.from
      modalDate.innerHTML = new Date(data.created_at).toLocaleString()
      modalStatus.innerHTML = data.status
      modalMessage.innerHTML = data.message
      modalId.innerHTML = data.id
      modalSendEmail.href  = 'mailto:' + data.from + '?subject=' + encodeURIComponent(newSubject) + '&body=' + encodeURIComponent(newBody);
    }
  </script>
</div>
@endsection