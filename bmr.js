class BMRCalculator {
    constructor(weight, height, age, gender) {
      this.weight = weight;
      this.height = height;
      this.age = age;
      this.gender = gender;
    }
  
    calculateBMR() {
      let bmr;
  
      // calculate the initial BMR
      bmr = 10 * this.weight + 6.25 * this.height - 5 * this.age;
  
      // gender specific adjustment
      if (this.gender === "male") {
        bmr += 5;
      } else if (this.gender === "female") {
        bmr -= 161;
      }
  
      return bmr;
    }
  
    getResult() {
      const bmr = this.calculateBMR();
  
      const activityLevels = {
        sedentary: bmr * 1.2,
        light: bmr * 1.375,
        moderate: bmr * 1.55,
        veryActive: bmr * 1.725,
        superActive: bmr * 1.9,
      };
  
      return { bmr, activityLevels };
    }
  }
  
  //* selectors
  
  const selectors = {
    form: document.getElementById("calculator"),
    result: document.getElementById("result"),
    bmr: document.getElementById("bmr"),
    sedentary: document.getElementById("sedentary"),
    light: document.getElementById("light"),
    moderate: document.getElementById("moderate"),
    veryActive: document.getElementById("very-active"),
    superActive: document.getElementById("super-active"),
  };
  
  //* renderer
  
  const render = ({ bmr, activityLevels }) => {
    selectors.bmr.textContent = Math.round(bmr).toLocaleString("en");
  
    for (const k in activityLevels) {
      const calories = Math.round(activityLevels[k]);
      selectors[k].textContent = calories.toLocaleString("en");
    }
  };
  
  //* event handlers
  
  const onFormSubmit = (e) => {
    e.preventDefault();
  
    const form = e.target;
  
    const weight = Number(form.weight.value);
    const height = Number(form.height.value);
    const age = Number(form.age.value);
    const gender = form.gender.value;
  
    if (isNaN(weight) || isNaN(height) || isNaN(age)) {
      alert("Weight, height and age must be numeric");
      return;
    }
  
    selectors.result.classList.remove("show");
  
    setTimeout(() => {
      const calc = new BMRCalculator(weight, height, age, gender);
  
      render(calc.getResult());
  
      selectors.result.classList.add("show");
    }, 400);
  };
  
  const onFormReset = () => {
    selectors.result.classList.remove("show");
  };
  
  //* event listeners
  
  selectors.form.addEventListener("submit", onFormSubmit);
  selectors.form.addEventListener("reset", onFormReset);