// window.onload = function(){
//     let btn = document.getElementById('btn');
//     btn.onclick = bmi;
//   }
//   function bmi(){
//     height = parseInt(document.getElementById("height").value);
//     weight = parseInt(document.getElementById("weight").value);
//     height = Math.pow(height / 100, 2);
//     result = Math.round((weight / height) * 100) / 100;
//     if (isNaN(result)) {
//       (document.getElementById("result").innerHTML =
//         "<b>Please Fill the given fields.<b>"),
//         alert("Fill it!");
//       (document.getElementById("diet-plan").innerHTML =
//         "<b>Please Calculate Your Bmi first!!!<b>"),
//         alert("Find your BMI ");
//     } else if (result < 18.5) {
//       document.getElementById("result").innerHTML =
//         "<b>Your Current Bmi is <b>" +
//         result +
//         " Kg/m2" +
//         "<br><br><b>&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;UnderWeight<b>";
//       document.getElementById("diet-plan").innerHTML =
//         "&emsp;&emsp;&emsp;&emsp;<marquee>As Your Weight is below ideal,You need to gain some weight,So you have to be in calorie surplus!&emsp;&emsp;&emsp;&emsp;For that i will be providing you some dietary foods and plans that can make you gain some weight.</marquee>";
//     } else if (result >= 18.5 && result <= 24.9) {
//       document.getElementById("result").innerHTML =
//         "<b>Your Current Bmi is <b>" +
//         result +
//         " Kg/m2" +
//         "<br><br><b>&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;Normal<b>";
//       document.getElementById("diet-plan").innerHTML =
//         "&emsp;&emsp;&emsp;&emsp;<marquee>As Your weight level is ideal,You can Choose Whatever,Either You can do weight loss to look more shredded Or You can do Weight Gain to look More Muscular!!!</marquee>";
//     } else if (result >= 25.0 && result < 29.9) {
//       document.getElementById("result").innerHTML =
//         "<b>Your Current Bmi is <b>" +
//         result +
//         " Kg/m2" +
//         "<br><br><b>&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;OverWeight<b>";
//       document.getElementById("diet-plan").innerHTML =
//         "&emsp;&emsp;&emsp;&emsp;<marquee>As Your Weight level is bit more than the ideal weight,You have to lose some weight,For that you have to be in calorie deficit!&emsp;&emsp;&emsp;&emsp;I will be providing you some dietary foods and plans that can make you loss some weight.</marquee>";
//     } else if (result >= 30.0) {
//       document.getElementById("result").innerHTML =
//         "<b>Your Current Bmi is <b>" +
//         result +
//         " Kg/m2" +
//         "<br><br><b>&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;Obese<b>";
//       document.getElementById("diet-plan").innerHTML =
//         "&emsp;&emsp;&emsp;&emsp;<marquee>As Your Weight level is far from ideal,You need to loss weight,So you have to be in calorie deficit!&emsp;&emsp;&emsp;&emsp;For that i will be providing you some dietary foods and plans that can make you loss  weight.</marquee>";
//     }
//   }