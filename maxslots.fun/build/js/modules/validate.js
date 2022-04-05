"use strict"

export function validate() {
  document.addEventListener("DOMContentLoaded", function() {
    const emailEngland = document.querySelector(".email-england");
    const emailPoland = document.querySelector(".email-poland");
    const emailGermany = document.querySelector(".email-germany");

    if (emailEngland) {
      new JustValidate('.england-form', {
        colorWrong: "#FF6972",
        rules: {
          name: {
            required: true,
            minLength: 2,
          },
          mail: {
            required: true,
          },
        },
        messages: {
          name: {
            required: 'Enter your name',
            minLength: 'Minimum number of letters - 2',
          },
          mail: {
            required: 'Enter your email',
          },
        },
      
    
        // Отправка на почту
        submitHandler: function(form, values, ajax) {
          let formData = new FormData(form);
      
          let xhr = new XMLHttpRequest();
      
          xhr.onreadystatechange = function() {
      
            if (xhr.readyState === 4) {
              if (xhr.status === 200) {
                console.log("Отправлено")
              }
            }
          }
      
          xhr.open("POST", "mail.php", true);
          xhr.send(formData)
      
          form.reset();
        }
      });
    }

    if (emailPoland) {
      new JustValidate('.poland-form', {
        colorWrong: "#FF6972",
        rules: {
          name: {
            required: true,
            minLength: 2,
          },
          mail: {
            required: true,
          },
        },
        messages: {
          name: {
            required: 'Wpisz swoje imię',
            minLength: 'Minimalna liczba liter - 2',
          },
          mail: {
            required: 'Wprowadź swój email',
          },
        },
      
    
        // Отправка на почту
        submitHandler: function(form, values, ajax) {
          let formData = new FormData(form);
      
          let xhr = new XMLHttpRequest();
      
          xhr.onreadystatechange = function() {
      
            if (xhr.readyState === 4) {
              if (xhr.status === 200) {
                console.log("Отправлено")
              }
            }
          }
      
          xhr.open("POST", "mail.php", true);
          xhr.send(formData)
      
          form.reset();
        }
      });
    }

    if (emailGermany) {
      new JustValidate('.germany-form', {
        colorWrong: "#FF6972",
        rules: {
          name: {
            required: true,
            minLength: 2,
          },
          mail: {
            required: true,
          },
        },
        messages: {
          name: {
            required: 'Bitte geben Sie Ihren Namen ein',
            minLength: 'Die Mindestanzahl von Buchstaben - 2',
          },
          mail: {
            required: 'Bitte geben Sie ihre E-Mail-Adresse ein',
          },
        },
      
    
        // Отправка на почту
        submitHandler: function(form, values, ajax) {
          let formData = new FormData(form);
      
          let xhr = new XMLHttpRequest();
      
          xhr.onreadystatechange = function() {
      
            if (xhr.readyState === 4) {
              if (xhr.status === 200) {
                console.log("Отправлено")
              }
            }
          }
      
          xhr.open("POST", "mail.php", true);
          xhr.send(formData)
      
          form.reset();
        }
      });
    }
  })
}