<section class="text-gray-900 dark:text-gray-100">
    <h1 class="text-xl md:text-2xl font-bold">Showing all result about `{{ request()->segment(3) }}`:</h1>

        <div class="p-3 bg-gray-100 dark:bg-gray-800 rounded w-full md:w-64 flex-col justify-center items-center mt-10 transition-all duration-300">
            <div class="flex items-center justify-center w-full h-32 bg-gray-50 dark:bg-gray-800 dark:border-gray-700" id="pulseStoreInfo">
                <div class="px-3 py-1 text-xs font-medium leading-none text-center text-blue-800 bg-blue-200 rounded-full animate-pulse dark:bg-blue-900 dark:text-blue-200" >loading...</div>
            </div>
            <div id="infoHeader" class="hidden">
              <div class="w-full text-center  font-bold underline">
                Music store 01
            </div>
            <div class="mt-3">
                  <div id="alert-3" class=" transition-all duration-300 flex mb-2 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"  role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-sm font-medium" id="totalMusicFound">
                    </div>
                  </div>
                  <div id="alert-1" class=" transition-all duration-300 flex mb-2 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"  role="alert">
                      <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                      <span class="sr-only">Info</span>
                      <div class="ml-3 text-sm font-medium" id="showingMusicNow">
                      </div>
                    </div>
            </div>
            </div>
        </div>
  

        
        <div class="relative overflow-x-auto shadow-md sm:rounded my-5" id="tableSkleton">
          <table class="w-full text-sm text-left  text-gray-500 dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  <tr class="grid grid-cols-1 md:grid-cols-3 items-center md:text-center">
                    <th class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
                      <div class="bg-gray-100 dark:bg-gray-600 rounded-full w-28 p-3"></div>
                  </th>
                      <th class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
                        <div class="bg-gray-100 dark:bg-gray-600 rounded-full w-28 p-3"></div>
                    </th>
                      <th class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
                        <div class="bg-gray-100 dark:bg-gray-600 rounded-full w-28 p-3"></div>
                    </th>
                  </tr>
              </thead>
              <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 grid grid-cols-1 md:grid-cols-3 items-center  md:text-center">
                  <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
                    <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-60 lg:w-full p-7"></div>
                </td>
                  <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
                      <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-60 p-3"></div>
                  </td>
                <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
                    <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-28 p-3"></div>
                </td>
              </tr>


              
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 grid grid-cols-1 md:grid-cols-3 items-center  md:text-center">
                <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
                  <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-60 lg:w-full p-7"></div>
              </td>
                <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
                    <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-60 p-3"></div>
                </td>
              <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
                  <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-28 p-3"></div>
              </td>
            </tr>


            
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 grid grid-cols-1 md:grid-cols-3 items-center  md:text-center">
              <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
                <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-60 lg:w-full p-7"></div>
            </td>
              <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
                  <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-60 p-3"></div>
              </td>
            <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
                <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-28 p-3"></div>
            </td>
          </tr>


          
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 grid grid-cols-1 md:grid-cols-3 items-center  md:text-center">
            <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
              <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-60 lg:w-full p-7"></div>
          </td>
            <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
                <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-60 p-3"></div>
            </td>
          <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
              <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-28 p-3"></div>
          </td>
        </tr>


        
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 grid grid-cols-1 md:grid-cols-3 items-center  md:text-center">
          <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
            <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-60 lg:w-full p-7"></div>
        </td>
          <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
              <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-60 p-3"></div>
          </td>
        <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
            <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-28 p-3"></div>
        </td>
      </tr>


      
      <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 grid grid-cols-1 md:grid-cols-3 items-center  md:text-center">
        <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
          <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-60 lg:w-full p-7"></div>
      </td>
        <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
            <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-60 p-3"></div>
        </td>
      <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
          <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-28 p-3"></div>
      </td>
    </tr>


    
    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 grid grid-cols-1 md:grid-cols-3 items-center  md:text-center">
      <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
        <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-60 lg:w-full p-7"></div>
    </td>
      <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
          <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-60 p-3"></div>
      </td>
    <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
        <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-28 p-3"></div>
    </td>
  </tr>


  
  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 grid grid-cols-1 md:grid-cols-3 items-center  md:text-center">
    <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
      <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-60 lg:w-full p-7"></div>
  </td>
    <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
        <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-60 p-3"></div>
    </td>
  <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
      <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-28 p-3"></div>
  </td>
</tr>



<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 grid grid-cols-1 md:grid-cols-3 items-center  md:text-center">
  <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
    <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-60 lg:w-full p-7"></div>
</td>
  <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
      <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-60 p-3"></div>
  </td>
<td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
    <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-28 p-3"></div>
</td>
</tr>


<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 grid grid-cols-1 md:grid-cols-3 items-center  md:text-center">
  <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
    <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-60 lg:w-full p-7"></div>
</td>
  <td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
      <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-60 p-3"></div>
  </td>
<td class="px-6 py-2 md:py-4 text-center flex justify-center items-center animate-pulse">
    <div class="bg-gray-100 dark:bg-gray-700 rounded-full w-28 p-3"></div>
</td>
</tr>

              </tbody>
          </table>
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

<div id="tableOnePaginataionSkleton" class="flex justify-center my-5">
  
  <!-- Previous Button -->
  <a id="previousBtn" class="inline-flex items-center px-12 py-4 animate-pulse mr-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
    
    
  </a>
  <a id="nextBtn" class="inline-flex items-center px-12 py-4 animate-pulse text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
    
    
  </a>
  
  </div>



<div id="tableOnePaginataion" class="flex justify-center my-5 hidden">
  
<!-- Previous Button -->
<a id="previousBtnNew" class="opacity-30 cursor-not-allowed inline-flex items-center px-4 py-2 mr-3  text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
  <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
  Previous
</a>
<a id="nextBtnNew" href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
  Next
  <svg aria-hidden="true" class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
</a>

</div>

</section>

<script>
    $(document).ready(function () {

      // session()->has('randomly_selected_music')

      if('{{ session('randomly_selected_music') }}' == 'yes') {
        console.log("Randomly Selected music served.")
      }

ShowLogVerify(arr)
let segments = window.location.pathname.split('/')[2];
let searchSegment = '{{ request()->segment(3) }}'
if(searchSegment.length > 0) {

var rootPath = window.location.protocol + "//" + window.location.hostname + ":" + window.location.port;





$.ajax({
url: rootPath+/data/+'{{ request()->segment(3) }}'+'/1',
headers: {
'Encrypt-id': '{{ encrypt(Cookie::get('_RAND_ID')) }}',
'Auth-temp-user': 'true'
},
success: function(data) {





  $.ajax({
    url: '{{ route('decryptAudio.list', ['encryptedData' => ':encryptedData', 'page' => 1]) }}'.replace(':encryptedData', encodeURIComponent(searchSegment)),
    type: 'get',   
    success: function(decrypted_data) {
      console.log(decrypted_data);

      if(decrypted_data['total'] > 0) {

startTable(decrypted_data,'#firstTbody','#firstDataTable', '#infoHeader', '#pulseStoreInfo', '#tableSkleton')
$("#totalMusicFound").html('Total music found: ' + decrypted_data['total'])
$("#showingMusicNow").html('Showing music now: ' + decrypted_data['tracks'].length)

}







//Pagination logic firstSec Table

let totalPage = decrypted_data['total']/10;
console.log('Approximately total page should be: ' + Math.ceil(totalPage));

if(decrypted_data['nextPage'] > 1) {


  $("#tableOnePaginataion").removeClass('hidden');
  $('#tableOnePaginataionSkleton').addClass('hidden');

  $('#nextBtnNew').click(function(e) {
    e.preventDefault();
    

    let goToNextPage = 2;
      
      console.log("The next page no is: " + goToNextPage)


    $.ajax({
    url: rootPath+/data/+'{{ request()->segment(3) }}'+'/'+goToNextPage,
    headers: {
    'Encrypt-id': '{{ encrypt(Cookie::get('_RAND_ID')) }}',
    'Auth-temp-user': 'true'
    },  
    success: function(nextPageData) {
      $.ajax({
    url: "{{ route('decryptAudio.list', ['encryptedData' => ':encryptedData', 'page' => ':nextPageNumber']) }}".replace(':encryptedData', encodeURIComponent(searchSegment)).replace(':nextPageNumber', goToNextPage) ,
    type: 'get',   
    success: function(decrypted_data) {
      console.log(decrypted_data);
      goToNextPage += 1;

    }})
    },
    error: function(xhr, status, error) {
      console.log(error);
    }
  });


  })


  // if(decrypted_data['nextPage'] > 2) {
  // $('#previousBtnNew').removeClass('opacity-30 cursor-not-allowed');

  // $('#tableOnePaginataion').click(function (e) { 
  //   e.preventDefault();

  //   alert();
    
  // });
  
  // }
}



      $.ajax({
    url: '{{ route('endSession.decryptAudio.list', ['encryptedData' => ':encryptedData', 'page' => 1]) }}'.replace(':encryptedData', encodeURIComponent(searchSegment)),
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
}
    });
</script>