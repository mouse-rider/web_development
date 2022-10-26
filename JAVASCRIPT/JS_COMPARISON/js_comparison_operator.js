console.log('5>1:',5>1);

console.log('3>8',3>8);

console.log('4>7:',4>7);

console.log('1>=1:',1>=1);

console.log('2<=6:',2<=6);

console.log('9==9:',9==9);

console.log('"employee"=="employee"',"employee"=="employee");

console.log('"10"==10',"10"==10); // string and number // true
// what happends when we use == is that, JavaScript is using something called type coercion
// Type coercion means that JavaScript is trying its best to convert both of the object 
// Compariron

//Type coercion is the process of converting values from one type to another
//(such as string to number, object to boolean, and so on)
// Any type, be it primitive are: number, string, boolean, null, undefined + symbol

// If one is a string and one is a number BUT they shoud not be the same.
// To ensure this, we add an extra '=' sign for it to have '===' , shown below.
console.log('"11"===11:',"11"===11); //sam enumber but with different DataType, output is False
// output would br false



// we can do the same with inequality .
// so, if we wanna check inequality for not just the value but also data type, do as show 

console.log('5!=="5"',5!=="5");
// In the abou=ve example, we are checking if '5 number not equals to "5" string'
//simplt to say we are checking datatypes also

console.log('5!="5"',5!="5");
// Output will be false because it is falsely inequal or a double negative 

// It is common in prohgramming language for "0" and "1" to be substitutes for 'true' a 
console.log('"true==1:",true==1:','true==1:',true==1); //value o/p ==> true

console.log('"true===1:",true===1','true===1:',true===1); //data type o/p ==> false

//Similarly,
console.log('false==0:',false==0); // value
console.log('false===0:',false===0); // datatype





// JavaScript has wired behaviour for null, undefined  and NaN values 

console.log('null==undefined:',null==undefined); // true for value comprison

console.log('null===undefined:',null===undefined); // false for data type comparison

// The NaN property respects "NaN-a-number" value.

console.log('NaN==NaN:',NaN==NaN);

// The NaN property is the same as the Number

// Nan property. Use the isNaN() Global function to check if a value is a NaN value.

