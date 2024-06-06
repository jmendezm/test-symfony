function scope_var() {
    var allow = true;
    if (allow) {
        var eso = "eso_var";
        var eso = "eso_var_2"
    }
    var eso = "eso_var_3";
    console.log(eso);
}

function scope_let() {
    var allow = true;
    if (allow) {
        let eso = "eso_let";

        // esto tampoco se puede hacer
        // let eso = "eso_let_2";
        
        console.log(eso);
    }
    let eso = "eso_let_2";
    console.log(eso);
    // no se puede usar aqui
    // console.log(eso);
}

scope_var();
scope_let();


function Reverse(text) {
    let text_reversed = "";
    for(i = text.length-1; i >= 0; i--) {
        text_reversed += text[i];
    }
    return text_reversed;
}

let a = "texto de prueba";
console.log(`${a} reversed is: ${Reverse(a)}`);


function FilterEvenNumbers(array) {
    let evens = [];
    for(i = 0; i < array.length; i++) {
        if(array[i] % 2 === 0) {
            evens.push(array[i]);
        }
    }
    return evens;
}

console.log(FilterEvenNumbers([1,2,3,4,5,6,7,8,9,0,10,11,12,13]));


function AsyncCode() {
    console.log("start");

    let promise = new Promise((resolved, reject) => {
        // simulate API call

        // if change to true, the primse will fail executing catch()
        let failResponse = false;

        setTimeout( () => {
            if(failResponse) {
                reject('Error executing promise');
            }
            resolved('Promised executed OK');
        }, 3000);
    });
    promise.then((m) => {
        console.log(`OK: ${m}`);
    }).catch( (m) => {
        console.log(`FAIL: ${m}`)
    });
    console.log("end");
}

//AsyncCode();

function NaN_Null_Undef(var_c) {
    let var_a;
    console.log(var_a); // undefined
    let var_b = "asd";
    if(isNaN(var_b)) {
        console.log("var_b is not a number");
    }

    console.log(var_c)
}
NaN_Null_Undef(null);