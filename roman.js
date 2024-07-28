let input = 'MCMXCI'

let myArray = input.split("");

let strToNum = {
    'I': 1,
    'V': 5,
    'X': 10,
    'L': 50,
    'C': 100,
    'D': 500,
    'M': 1000
}

let output = 0;

for (i = 0; i < myArray.length; i++){

    console.log('strToNum[myArray[i]]: ', strToNum[myArray[i]])
    console.log('strToNum[myArray[i+1]]: ', strToNum[myArray[i+1]])

    if(!strToNum[myArray[i+1]]){
        output += strToNum[myArray[i]]
        console.log('laststring: ', strToNum[myArray[i]])
    }
    else if(strToNum[myArray[i]] < strToNum[myArray[i+1]]){
        output -= strToNum[myArray[i]]
        console.log('minus: ', strToNum[myArray[i]])
    }
    else if (strToNum[myArray[i]] >= strToNum[myArray[i+1]] || i+1 > myArray.length){
        output += strToNum[myArray[i]]
        console.log('plus: ', strToNum[myArray[i]])
    }
}

console.log(`Input: ${input} gives us ${output}`)