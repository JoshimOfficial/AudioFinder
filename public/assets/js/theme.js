                                                        //................................................................................//
                                                        //                                    All logics                                  //
                                                        //.................................................................................//

//........................................................Working with dark mode..............................................................//
//Cheking if website already in dark mode or not.
if (localStorage.getItem("dark_mode")) {
    let get_dark_current_status = localStorage.getItem("dark_mode");

    if (get_dark_current_status === "true") {
        document.querySelector("html").classList.add("dark");
        document.querySelector("#light_mode").classList.remove("hidden");
    } else {
        document.querySelector("html").classList.remove("dark");
        document.querySelector("#dark_mode").classList.remove("hidden");
    }
}
//If user is new then by default light mode will activate.
else {
    document.querySelector("#dark_mode").classList.remove("hidden");
}

//Cheking if dark mode id exist in the current webpage.
if (document.querySelector("#dark_mode")) {
    let dark_mode = document.querySelector("#dark_mode");

    dark_mode.addEventListener("click", () => {
        turn_on_dark_mode();
    })
}

//Cheking if light mode id exist in the current webpage.
if (document.querySelector("#light_mode")) {
    let light_mode = document.querySelector("#light_mode");

    light_mode.addEventListener("click", () => {
        turn_on_light_mode();
    })
}

//This is for Auth

const arr = [
    "=> Absolutely, no doubt about it. 👍",
    "=> Yes, that's correct. ✅",
    "=> Of course, it's authentic. 🔒",
    "=> Certainly, it's a genuine browser. 🌐",
    "=> Definitely, it's trustworthy. 🙌",
    "=> Why wouldn't it be? You can trust it. 🤝",
    "=> Yes, I've confirmed it's legitimate. 🆗",
    "=> Yes, I can assure you it's the real deal. 💯",
    "=> Without a doubt, it's an authentic browser. 🛡️",
    "=> Yes, I've reviewed it and it's a trustworthy browser. 👍",
    "=> Yes, I've checked and determined that it's authentic. 🔍",
    "=> Yes, I've examined it and it's a reliable browser. 👀",
    "=> Yes, I've double-checked and it's definitely authentic. ✅",
    "=> Yes, it's a verified and trustworthy browser. ✅",
    "=> Yes, it's a reputable and reliable browser. 👌",
    "=> Yes, I'm confident it's a genuine and secure browser. 🔒",
    "=> Yes, I'm positive it's a legitimate and safe browser. 👍",
    "=> Yes, I'm certain it's an authentic and trustworthy browser. 🛡️",
    "=> Yes, I've conducted a thorough analysis and it's an authentic browser. 🔍",
    "=> Yes, I've scrutinized it and can confirm that it's a secure and reliable browser. 🔒",
    "=> Yes, after a detailed examination, I can confidently say that it's an authentic browser. 👍"
];



const arrFirstAsk = [
    "Wait I am checking 🤔",
    "Just give me a second to check ⏳",
    "Hold on, checking again 🕵️‍♂️",
    "Just calm, I am checking 🧘‍♀️",
    "So far, just wait a sec ⌛️",
    "Let me investigate further 🕵️‍♀️",
    "I need to gather more information 📝",
    "I'm not sure, let me look into it 🔍"
];

//..............................................Working with dark mode part has been ended....................................................//

                                                    //................................................................................//
                                                    //                                     All functions                              //
                                                    //.................................................................................//



//if user click on dark mode icon
function turn_on_dark_mode() {
    localStorage.setItem("dark_mode", "true");

    let current_status = localStorage.getItem("dark_mode");
    if (current_status === "true") {
        let light_mode = document.querySelector("#light_mode");
        let dark_mode = document.querySelector("#dark_mode");
        document.querySelector("html").classList.add("dark");

        dark_mode.classList.add("hidden");
        light_mode.classList.remove("hidden");
    }
}

//If user click on light mode icon
function turn_on_light_mode() {
    localStorage.setItem("dark_mode", "false");

    let get_current_status = localStorage.getItem("#dark_mode");
    if (get_current_status != "true") {
        let get_dark_mode = document.querySelector("#dark_mode");
        let get_light_mode = document.querySelector("#light_mode");
        document.querySelector("html").classList.remove("dark");

        get_dark_mode.classList.remove("hidden");
        get_light_mode.classList.add("hidden");
    }
}

//For Auth
function accessControl(arr) {
    let rand = Math.floor(Math.random() * arr.length);
    return arr[rand];
}

function accessControl(arrFirstAsk) {
    let rand = Math.floor(Math.random() * arrFirstAsk.length);
    return arrFirstAsk[rand];
}

function ShowLog(arrFirstAsk){
    console.log('Is this an authentic browser?');
    console.log(accessControl(arrFirstAsk));
    location.reload();
}

function ShowLogVerify(arr) {
    console.log('Is this an authentic browser?');
    console.log(accessControl(arr));
}


function startTable(data,id,hiddenClassId){
    for(i = 0; i < data['tracks'].length; i++) {

        document.querySelector(id).innerHTML += `

        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 grid grid-cols-1 md:grid-cols-3 items-center  md:text-center">
                <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white w-full flex justify-center">
                    <audio controls class="w-60 lg:w-full">
                        <source src="${data['tracks'][i]['preview']}" type="audio/mpeg">
                      Your browser does not support the audio element.
                      </audio>
                </th>
                <td class="px-6 py-2 md:py-4 text-center">
                    ${data['tracks'][i]['name']}
                </td>
                <td class="px-6 pb-3 md:py-4 text-center">
                        <span class="md:hidden mr-2">Link:</span>
                        <a href="${data['tracks'][i]['preview']}" class="text-blue-500 underline">Download</a>
                </td>
            </tr>


        `;
    }
    $(hiddenClassId).removeClass('hidden');
}




function AuthTableData(url,encriptionId,) {

    $.ajax({
        url: url,
        headers: {
        'Encrypt-id': encriptionId,
        'Auth-temp-user': 'true'
        },
        success: function(data) {
        console.log(data);
        
        if(data['total'] > 0) {
        
            startTable(data,'#firstTbody','#firstDataTable')
            
        }
        else {
            console.log("This content less then 0");
        }
        },
        error: function(xhr, status, error) {
        console.log(error);
        }
        });


}