let op1 = prompt("Qual tipo de conta soma, divisão, subtração ou multiplicação?");
switch(op1) {
    case "soma":
        let num1 = parseFloat(prompt("Primeiro valor:"));
        let num2 = parseFloat(prompt("Segundo valor:"));
        let result = num1 + num2;
        alert(num1 + " + " + num2 + " = " + result);
        break;
    case "subtract":
        let num1 = parseFloat(prompt("First value:"));
        let num2 = parseFloat(prompt("Second value:"));
        var result = num1 - num2;
        alert(num1 + " - " + num2 + " = " + result);
        break;
    case "multiply":
        let num1 = parseFloat(prompt("First value:"));
        let num2 = parseFloat(prompt("Second value:"));
        let result = num1 * num2;
        alert(num1 + " * " + num2 + " = " + result);
        break;
    case "divide":
        let num1 = parseFloat(prompt("First value:"));
        let num2 = parseFloat(prompt("Second value:"));
        let result = num1 / num2;
        alert(num1 + " / " + num2 + " = " + result);
        break;
    case "exponent":
        let num1 = parseFloat(prompt("First value:"));
        let num2 = parseFloat(prompt("Second value:"));
        let result = Math.pow(num1,num2);
        alert(num1 + " ^ " + num2 + " = " + result);
        break;
    default:
        alert("Option not available. Available options: add, subtract, multiply, divide, and exponent.");
}