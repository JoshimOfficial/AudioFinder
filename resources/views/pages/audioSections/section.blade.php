<section class="text-gray-900 dark:text-gray-100">
    <h1 class="text-xl md:text-2xl font-bold">Showing all result about `{{ request()->segment(3) }}`:</h1>

        <div class="p-3 bg-gray-100 dark:bg-gray-800 rounded w-full md:w-64 flex-col justify-center items-center mt-10">
            <div class="w-full text-center  font-bold underline">
                Music store 01
            </div>
            <div class="mt-3">
                <h1 class=" font-bold" id="totalMusicFound"></h1>
                <h1 class=" font-bold" id="showingMusicNow"></h1>
            </div>
        </div>

<div class="relative overflow-x-auto shadow-md sm:rounded my-5">
    <table class="w-full text-sm text-left  text-gray-500 dark:text-gray-400 hidden" id="firstDataTable">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr class="grid grid-cols-1 md:grid-cols-3 items-center md:text-center">
                <th scope="col" class="px-6 py-3">
                    <span class="hidden md:grid">
                        Play
                    </span>
                    <span class="md:hidden">Song info:</span>
                </th>
                <th scope="col" class="px-6 py-3 hidden md:grid">
                    Song name
                </th>
                <th scope="col" class="px-6 py-3 hidden md:grid">
                    Download
                </th>
            </tr>
        </thead>
        <tbody id="firstTbody">

        </tbody>
    </table>
</div>

</section>

<script>
    $(document).ready(function () {

ShowLogVerify(arr)
let segments = window.location.pathname.split('/')[2];
let searchSegment = '{{ request()->segment(3) }}'
if(searchSegment.length > 0) {

var rootPath = window.location.protocol + "//" + window.location.hostname + ":" + window.location.port;

$.ajax({
url: rootPath+/data/+'{{ request()->segment(3) }}',
headers: {
'Encrypt-id': '{{ encrypt(Cookie::get('_RAND_ID')) }}',
'Auth-temp-user': 'true'
},
success: function(data) {

  $.ajax({
    url: '{{ route('decryptAudio.list', ['encryptedData' => ':encryptedData']) }}'.replace(':encryptedData', encodeURIComponent(searchSegment)),
    type: 'get',   
    success: function(decrypted_data) {
      console.log(decrypted_data);

      if(decrypted_data['total'] > 0) {

startTable(decrypted_data,'#firstTbody','#firstDataTable')
$("#totalMusicFound").html('Total music found: ' + decrypted_data['total'])
$("#showingMusicNow").html('Showing music now: ' + decrypted_data['tracks'].length)
}
      $.ajax({
    url: '{{ route('endSession.decryptAudio.list', ['encryptedData' => ':encryptedData']) }}'.replace(':encryptedData', encodeURIComponent(searchSegment)),
    type: 'get',   
    success: function(decrypted_data) {
    },
    error: function(xhr, status, error) {
      console.log(error);
    }
  });


  
    },
    error: function(xhr, status, error) {
      console.log(error);
    }
  });


},
error: function(xhr, status, error) {
console.log(error);
}
});

// AuthTableData(`${rootPath}/data/{{ request()->segment(3) }}`, '{{ encrypt(Cookie::get('_RAND_ID')) }}' )
}
    });
</script>