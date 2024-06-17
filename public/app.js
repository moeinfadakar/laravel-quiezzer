const $ = document
let inputPlace = $.getElementById("inputPlace")

let remove = $.getElementById("remove");
let add = $.getElementById("add");

let elm1 = $.createElement("input");
let label =$.createElement('label');

let num = 2

let Timer = $.getElementById("Timer");



function AddClickBtn() {

    console.log("add");

    num++
    let textTrue = "پاسخ" + " "+ num + " را وارد کنید  "
    let name= "answer"+num
    let textOption = "گزینه "+num + " "

    let divWrapper = $.createElement("div");
    divWrapper.setAttribute( 'class' , 'form-floating mb-3'  );

    let selector = $.getElementById("selector")

    let OPT = $.createElement("option");
    OPT.setAttribute('value', num );
    OPT.setAttribute('id' , "Option");
    OPT.innerHTML = textOption;

    let elm1 = $.createElement("input");
    elm1.setAttribute( 'type'  , 'text'  )
    elm1.setAttribute( 'class'  , 'form-control'  );
    elm1.setAttribute( 'id'  , 'floatingInput'  );
    elm1.setAttribute( 'placeholder'  , textTrue  );
    elm1.setAttribute('name' , name )

    let label =$.createElement('label')
    label.setAttribute( 'for' , 'floatingInput' )

    label.innerHTML = textTrue

 inputPlace.appendChild(divWrapper);
    divWrapper.appendChild(elm1);
    divWrapper.appendChild(label);
    selector.appendChild(OPT);
}


 function RemoveClickBtn(){


    elm1.setAttribute( 'type'  , 'text'  )
    elm1.setAttribute( 'class'  , 'form-control'  );
    elm1.setAttribute( 'id'  , 'floatingInput'  );
    elm1.setAttribute( 'placeholder'  , textTrue  );
    elm1.setAttribute('name' , name )

    divWrapper.removeChild(elm1);
    divWrapper.removeChild(label);

}







