"use strict"

  var timestamp = function () {
    var timeIndex = 0;
    var shifts = [35, 60, 60 * 3, 60 * 60 * 2, 60 * 60 * 25, 60 * 60 * 24 * 4, 60 * 60 * 24 * 10];

    var now = new Date();
    var shift = shifts[timeIndex++] || 0;
    var date = new Date(now - shift * 1000);

    return date.getTime() / 1000;
  };

  var changeSkin = function (skin) {
    location.href = location.href.split('#')[0].split('?')[0] + '?skin=' + skin;
  };

  var stories = new Zuck('stories', {
    backNative: true,
    previousTap: true,
    skin: "Snapgram",
    autoFullScreen: false,
    avatars: true,
    paginationArrows: false,
    list: false,
    cubeEffect: true,
    localStorage: true,
    autoFullScreen: true,
    stories: [

      {
        id: "Nomini", // story id
        photo: "./img/nomini-popup.png", // story photo (or user photo)
        name: "Nomini", // story name (or user name)
        link: "https://yandex.ru", // story link (useless on story generated by script)
        lastUpdated: "", // last updated date in unix time format
        seen: false, // set true if user has opened

        items: [ // array of items
          // story item example
          {
            id: "Nomini", // item id
            type: "photo", // photo or video
            length: 3, // photo timeout or video length in seconds - uses 3 seconds timeout for images if not set
            src: "./img/nomini-popup.png", // photo or video src
            preview: "./img/nomini-popup.png", // optional - item thumbnail to show in the story carousel instead of the story defined image
            link: "https://yandex.ru", // a link to click on story
            linkText: "Go yandex", // link text
            time: "", // optional a date to display with the story item. unix timestamp are converted to "time ago" format
            seen: false, // set true if current user was read,
            stars: "10",
            fs: "300 fs",
            fstext: "Free spin",
            price: "9.0K $",
            pricetext: "Bonus",
            namelink: "Go to casino",
            page: "1",
          },
          {
            id: "Nomini", // item id
            type: "photo", // photo or video
            length: 3, // photo timeout or video length in seconds - uses 3 seconds timeout for images if not set
            src: "./img/nomini-popup.png", // photo or video src
            preview: "./img/nomini-popup.png", // optional - item thumbnail to show in the story carousel instead of the story defined image
            link: "https://yandex.ru", // a link to click on story
            linkText: "Go yandex", // link text
            time: "", // optional a date to display with the story item. unix timestamp are converted to "time ago" format
            seen: false, // set true if current user was read,
            stars: "10",
            fs: "300 fs",
            fstext: "Free spin",
            price: "9.0K $",
            pricetext: "Bonus",
            namelink: "Go to casino",
            page: "2",
            benefits: [
              "Weekend deposit bonus up to 3150 + 50 FS",
              "Daily Drop & Wins 42 000",
              "100% Welcome Bonus up to 3 600 + 200 FS",
            ],
            arrimage: [
              "./img/visa.png",
              "./img/astropay.png",
              "./img/mifinity.png",
              "./img/jeton.png",
              "./img/ezeewallet.png",
              "./img/perfect-money.png",
              "./img/stickpay.png",
              "./img/paysafecard.png",
            ],
          },
        ],
      },


      {
        id: "20bet", // story id
        photo: "./img/20bet-popup.png", // story photo (or user photo)
        name: "20bet", // story name (or user name)
        link: "https://yandex.ru", // story link (useless on story generated by script)
        lastUpdated: "", // last updated date in unix time format
        seen: false, // set true if user has opened

        items: [ // array of items
          // story item example
          {
            id: "20bet", // item id
            type: "photo", // photo or video
            length: 3, // photo timeout or video length in seconds - uses 3 seconds timeout for images if not set
            src: "./img/20bet-popup.png", // photo or video src
            preview: "./img/20bet-popup.png", // optional - item thumbnail to show in the story carousel instead of the story defined image
            link: "https://yandex.ru", // a link to click on story
            linkText: "Go yandex", // link text
            time: "", // optional a date to display with the story item. unix timestamp are converted to "time ago" format
            seen: false, // set true if current user was read,
            stars: "9.9",
            fs: "100 fs",
            fstext: "Free spin",
            price: "1.3K $",
            pricetext: "Bonus",
            namelink: "Go to casino",
            page: "1",
          },
          {
            id: "20bet", // item id
            type: "photo", // photo or video
            length: 3, // photo timeout or video length in seconds - uses 3 seconds timeout for images if not set
            src: "./img/20bet-popup.png", // photo or video src
            preview: "./img/20bet-popup.png", // optional - item thumbnail to show in the story carousel instead of the story defined image
            link: "https://yandex.ru", // a link to click on story
            linkText: "Go yandex", // link text
            time: "", // optional a date to display with the story item. unix timestamp are converted to "time ago" format
            seen: false, // set true if current user was read,
            stars: "9.9",
            fs: "100 fs",
            fstext: "Free spin",
            price: "1.3K $",
            pricetext: "Bonus",
            namelink: "Go to casino",
            page: "2",
            benefits: [
              "Weekend deposit bonus up to 3150 + 50 FS",
              "Daily Drop & Wins 42 000",
              "100% Welcome Bonus up to 3 600 + 200 FS",
            ],
            arrimage: [
              "./img/visa.png",
              "./img/astropay.png",
              "./img/mifinity.png",
              "./img/jeton.png",
              "./img/ezeewallet.png",
              "./img/perfect-money.png",
              "./img/stickpay.png",
              "./img/paysafecard.png",
            ],
          },
        ],
      },

      {
        id: "skycrown", // story id
        photo: "./img/skycrown_black.png", // story photo (or user photo)
        name: "Skycrown", // story name (or user name)
        link: "https://yandex.ru", // story link (useless on story generated by script)
        lastUpdated: "", // last updated date in unix time format
        seen: false, // set true if user has opened

        items: [ // array of items
          // story item example
          {
            id: "Skycrown", // item id
            type: "photo", // photo or video
            length: 3, // photo timeout or video length in seconds - uses 3 seconds timeout for images if not set
            src: "./img/skycrown-popup.png", // photo or video src
            preview: "./img/skycrown-popup.png", // optional - item thumbnail to show in the story carousel instead of the story defined image
            link: "https://yandex.ru", // a link to click on story
            linkText: "Go yandex", // link text
            time: "", // optional a date to display with the story item. unix timestamp are converted to "time ago" format
            seen: false, // set true if current user was read,
            stars: "9.8",
            fs: "370 fs",
            fstext: "Free spin",
            price: "5.0K $",
            pricetext: "Bonus",
            namelink: "Go to casino",
            page: "1",
          },
          {
            id: "Skycrown", // item id
            type: "photo", // photo or video
            length: 3, // photo timeout or video length in seconds - uses 3 seconds timeout for images if not set
            src: "./img/skycrown-popup.png", // photo or video src
            preview: "./img/skycrown-popup.png", // optional - item thumbnail to show in the story carousel instead of the story defined image
            link: "https://yandex.ru", // a link to click on story
            linkText: "Go yandex", // link text
            time: "", // optional a date to display with the story item. unix timestamp are converted to "time ago" format
            seen: false, // set true if current user was read,
            stars: "9.8",
            fs: "370 fs",
            fstext: "Free spin",
            price: "5.0K $",
            pricetext: "Bonus",
            namelink: "Go to casino",
            page: "2",
            benefits: [
              "Weekend deposit bonus up to 3150 + 50 FS",
              "Daily Drop & Wins 42 000",
              "100% Welcome Bonus up to 3 600 + 200 FS",
            ],
            arrimage: [
              "./img/visa.png",
              "./img/astropay.png",
              "./img/mifinity.png",
              "./img/jeton.png",
              "./img/ezeewallet.png",
              "./img/perfect-money.png",
              "./img/stickpay.png",
              "./img/paysafecard.png",
            ],
          },
        ],
      },

      {
        id: "Sportasa", // story id
        photo: "./img/sportasa-popup.png", // story photo (or user photo)
        name: "Sportasa", // story name (or user name)
        link: "https://yandex.ru", // story link (useless on story generated by script)
        lastUpdated: "", // last updated date in unix time format
        seen: false, // set true if user has opened

        items: [ // array of items
          // story item example
          {
            id: "Sportasa", // item id
            type: "photo", // photo or video
            length: 3, // photo timeout or video length in seconds - uses 3 seconds timeout for images if not set
            src: "./img/sportasa-popup.png", // photo or video src
            preview: "./img/sportasa-popup.png", // optional - item thumbnail to show in the story carousel instead of the story defined image
            link: "https://yandex.ru", // a link to click on story
            linkText: "Go yandex", // link text
            time: "", // optional a date to display with the story item. unix timestamp are converted to "time ago" format
            seen: false, // set true if current user was read,
            stars: "9.6",
            fs: "210 fs",
            fstext: "Free spin",
            price: "2.0K $",
            pricetext: "Bonus",
            namelink: "Go to casino",
            page: "1",
          },
          {
            id: "Sportasa", // item id
            type: "photo", // photo or video
            length: 3, // photo timeout or video length in seconds - uses 3 seconds timeout for images if not set
            src: "./img/sportasa-popup.png", // photo or video src
            preview: "./img/sportasa-popup.png", // optional - item thumbnail to show in the story carousel instead of the story defined image
            link: "https://yandex.ru", // a link to click on story
            linkText: "Go yandex", // link text
            time: "", // optional a date to display with the story item. unix timestamp are converted to "time ago" format
            seen: false, // set true if current user was read,
            stars: "9.6",
            fs: "210 fs",
            fstext: "Free spin",
            price: "2.0K $",
            pricetext: "Bonus",
            namelink: "Go to casino",
            page: "2",
            benefits: [
              "Weekend deposit bonus up to 3150 + 50 FS",
              "Daily Drop & Wins 42 000",
              "100% Welcome Bonus up to 3 600 + 200 FS",
            ],
            arrimage: [
              "./img/visa.png",
              "./img/astropay.png",
              "./img/mifinity.png",
              "./img/jeton.png",
              "./img/ezeewallet.png",
              "./img/perfect-money.png",
              "./img/stickpay.png",
              "./img/paysafecard.png",
            ],
          },
        ],
      },

      {
        id: "Rabona", // story id
        photo: "./img/rabona-popup.png", // story photo (or user photo)
        name: "Rabona", // story name (or user name)
        link: "https://yandex.ru", // story link (useless on story generated by script)
        lastUpdated: "", // last updated date in unix time format
        seen: false, // set true if user has opened

        items: [ // array of items
          // story item example
          {
            id: "Rabona", // item id
            type: "photo", // photo or video
            length: 3, // photo timeout or video length in seconds - uses 3 seconds timeout for images if not set
            src: "./img/rabona-popup.png", // photo or video src
            preview: "./img/rabona-popup.png", // optional - item thumbnail to show in the story carousel instead of the story defined image
            link: "https://yandex.ru", // a link to click on story
            linkText: "Go yandex", // link text
            time: "", // optional a date to display with the story item. unix timestamp are converted to "time ago" format
            seen: false, // set true if current user was read,
            stars: "9.4",
            fs: "210 fs",
            fstext: "Free spin",
            price: "3.0K $",
            pricetext: "Bonus",
            namelink: "Go to casino",
            page: "1",
          },
          {
            id: "Rabona", // item id
            type: "photo", // photo or video
            length: 3, // photo timeout or video length in seconds - uses 3 seconds timeout for images if not set
            src: "./img/rabona-popup.png", // photo or video src
            preview: "./img/rabona-popup.png", // optional - item thumbnail to show in the story carousel instead of the story defined image
            link: "https://yandex.ru", // a link to click on story
            linkText: "Go yandex", // link text
            time: "", // optional a date to display with the story item. unix timestamp are converted to "time ago" format
            seen: false, // set true if current user was read,
            stars: "9.4",
            fs: "210 fs",
            fstext: "Free spin",
            price: "3.0K $",
            pricetext: "Bonus",
            namelink: "Go to casino",
            page: "2",
            benefits: [
              "Weekend deposit bonus up to 3150 + 50 FS",
              "Daily Drop & Wins 42 000",
              "100% Welcome Bonus up to 3 600 + 200 FS",
            ],
            arrimage: [
              "./img/visa.png",
              "./img/astropay.png",
              "./img/mifinity.png",
              "./img/jeton.png",
              "./img/ezeewallet.png",
              "./img/perfect-money.png",
              "./img/stickpay.png",
              "./img/paysafecard.png",
            ],
          },
        ],
      },

      {
        id: "Light-casino", // story id
        photo: "./img/light-casino_black.png", // story photo (or user photo)
        name: "Light-casino", // story name (or user name)
        link: "https://yandex.ru", // story link (useless on story generated by script)
        lastUpdated: "", // last updated date in unix time format
        seen: false, // set true if user has opened

        items: [ // array of items
          // story item example
          {
            id: "Light-casino", // item id
            type: "photo", // photo or video
            length: 3, // photo timeout or video length in seconds - uses 3 seconds timeout for images if not set
            src: "./img/light-casino-popup.png", // photo or video src
            preview: "./img/light-casino-popup.png", // optional - item thumbnail to show in the story carousel instead of the story defined image
            link: "https://yandex.ru", // a link to click on story
            linkText: "Go yandex", // link text
            time: "", // optional a date to display with the story item. unix timestamp are converted to "time ago" format
            seen: false, // set true if current user was read,
            stars: "9.33",
            fs: "250 fs",
            fstext: "Free spin",
            price: "5.0K $",
            pricetext: "Bonus",
            namelink: "Go to casino",
            page: "1",
          },
          {
            id: "Light-casino", // item id
            type: "photo", // photo or video
            length: 3, // photo timeout or video length in seconds - uses 3 seconds timeout for images if not set
            src: "./img/light-casino-popup.png", // photo or video src
            preview: "./img/light-casino-popup.png", // optional - item thumbnail to show in the story carousel instead of the story defined image
            link: "https://yandex.ru", // a link to click on story
            linkText: "Go yandex", // link text
            time: "", // optional a date to display with the story item. unix timestamp are converted to "time ago" format
            seen: false, // set true if current user was read,
            stars: "9.33",
            fs: "250 fs",
            fstext: "Free spin",
            price: "5.0K $",
            pricetext: "Bonus",
            namelink: "Go to casino",
            page: "2",
            benefits: [
              "Weekend deposit bonus up to 3150 + 50 FS",
              "Daily Drop & Wins 42 000",
              "100% Welcome Bonus up to 3 600 + 200 FS",
            ],
            arrimage: [
              "./img/visa.png",
              "./img/astropay.png",
              "./img/mifinity.png",
              "./img/jeton.png",
              "./img/ezeewallet.png",
              "./img/perfect-money.png",
              "./img/stickpay.png",
              "./img/paysafecard.png",
            ],
          },
        ],
      },

      {
        id: "Cadabrus", // story id
        photo: "./img/cadabrus-popup.png", // story photo (or user photo)
        name: "Cadabrus", // story name (or user name)
        link: "https://yandex.ru", // story link (useless on story generated by script)
        lastUpdated: "", // last updated date in unix time format
        seen: false, // set true if user has opened

        items: [ // array of items
          // story item example
          {
            id: "Cadabrus", // item id
            type: "photo", // photo or video
            length: 3, // photo timeout or video length in seconds - uses 3 seconds timeout for images if not set
            src: "./img/cadabrus-popup.png", // photo or video src
            preview: "./img/cadabrus-popup.png", // optional - item thumbnail to show in the story carousel instead of the story defined image
            link: "https://yandex.ru", // a link to click on story
            linkText: "Go yandex", // link text
            time: "", // optional a date to display with the story item. unix timestamp are converted to "time ago" format
            seen: false, // set true if current user was read,
            stars: "9.36",
            fs: "223 fs",
            fstext: "Free spin",
            price: "6.0K $",
            pricetext: "Bonus",
            namelink: "Go to casino",
            page: "1",
          },
          {
            id: "Cadabrus", // item id
            type: "photo", // photo or video
            length: 3, // photo timeout or video length in seconds - uses 3 seconds timeout for images if not set
            src: "./img/cadabrus-popup.png", // photo or video src
            preview: "./img/cadabrus-popup.png", // optional - item thumbnail to show in the story carousel instead of the story defined image
            link: "https://yandex.ru", // a link to click on story
            linkText: "Go yandex", // link text
            time: "", // optional a date to display with the story item. unix timestamp are converted to "time ago" format
            seen: false, // set true if current user was read,
            stars: "9.36",
            fs: "223 fs",
            fstext: "Free spin",
            price: "6.0K $",
            pricetext: "Bonus",
            namelink: "Go to casino",
            page: "2",
            benefits: [
              "Weekend deposit bonus up to 3150 + 50 FS",
              "Daily Drop & Wins 42 000",
              "100% Welcome Bonus up to 3 600 + 200 FS",
            ],
            arrimage: [
              "./img/visa.png",
              "./img/astropay.png",
              "./img/mifinity.png",
              "./img/jeton.png",
              "./img/ezeewallet.png",
              "./img/perfect-money.png",
              "./img/stickpay.png",
              "./img/paysafecard.png",
            ],
          },
        ],
      },

      {
        id: "National-casino", // story id
        photo: "./img/national-casino-popup.png", // story photo (or user photo)
        name: "National-casino", // story name (or user name)
        link: "https://yandex.ru", // story link (useless on story generated by script)
        lastUpdated: "", // last updated date in unix time format
        seen: false, // set true if user has opened

        items: [ // array of items
          // story item example
          {
            id: "National-casino", // item id
            type: "photo", // photo or video
            length: 3, // photo timeout or video length in seconds - uses 3 seconds timeout for images if not set
            src: "./img/national-casino-popup.png", // photo or video src
            preview: "./img/national-casino-popup.png", // optional - item thumbnail to show in the story carousel instead of the story defined image
            link: "https://yandex.ru", // a link to click on story
            linkText: "Go yandex", // link text
            time: "", // optional a date to display with the story item. unix timestamp are converted to "time ago" format
            seen: false, // set true if current user was read,
            stars: "9.0",
            fs: "200 fs",
            fstext: "Free spin",
            price: "9.11K $",
            pricetext: "Bonus",
            namelink: "Go to casino",
            page: "1",
          },
          {
            id: "National-casino", // item id
            type: "photo", // photo or video
            length: 3, // photo timeout or video length in seconds - uses 3 seconds timeout for images if not set
            src: "./img/national-casino-popup.png", // photo or video src
            preview: "./img/national-casino-popup.png", // optional - item thumbnail to show in the story carousel instead of the story defined image
            link: "https://yandex.ru", // a link to click on story
            linkText: "Go yandex", // link text
            time: "", // optional a date to display with the story item. unix timestamp are converted to "time ago" format
            seen: false, // set true if current user was read,
            stars: "9.0",
            fs: "200 fs",
            fstext: "Free spin",
            price: "9.11K $",
            pricetext: "Bonus",
            namelink: "Go to casino",
            page: "2",
            benefits: [
              "Weekend deposit bonus up to 3150 + 50 FS",
              "Daily Drop & Wins 42 000",
              "100% Welcome Bonus up to 3 600 + 200 FS",
            ],
            arrimage: [
              "./img/visa.png",
              "./img/astropay.png",
              "./img/mifinity.png",
              "./img/jeton.png",
              "./img/ezeewallet.png",
              "./img/perfect-money.png",
              "./img/stickpay.png",
              "./img/paysafecard.png",
            ],
          },
        ],
      },

      {
        id: "Vulkan", // story id
        photo: "./img/vulkan-popup.png", // story photo (or user photo)
        name: "Vulkan", // story name (or user name)
        link: "https://yandex.ru", // story link (useless on story generated by script)
        lastUpdated: "", // last updated date in unix time format
        seen: false, // set true if user has opened

        items: [ // array of items
          // story item example
          {
            id: "Vulkan", // item id
            type: "photo", // photo or video
            length: 3, // photo timeout or video length in seconds - uses 3 seconds timeout for images if not set
            src: "./img/vulkan-popup.png", // photo or video src
            preview: "./img/vulkan-popup.png", // optional - item thumbnail to show in the story carousel instead of the story defined image
            link: "https://yandex.ru", // a link to click on story
            linkText: "Go yandex", // link text
            time: "", // optional a date to display with the story item. unix timestamp are converted to "time ago" format
            seen: false, // set true if current user was read,
            stars: "9.3",
            fs: "301 fs",
            fstext: "Free spin",
            price: "9.02K $",
            pricetext: "Bonus",
            namelink: "Go to casino",
            page: "1",
          },
          {
            id: "Vulkan", // item id
            type: "photo", // photo or video
            length: 3, // photo timeout or video length in seconds - uses 3 seconds timeout for images if not set
            src: "./img/vulkan-popup.png", // photo or video src
            preview: "./img/vulkan-popup.png", // optional - item thumbnail to show in the story carousel instead of the story defined image
            link: "https://yandex.ru", // a link to click on story
            linkText: "Go yandex", // link text
            time: "", // optional a date to display with the story item. unix timestamp are converted to "time ago" format
            seen: false, // set true if current user was read,
            stars: "9.3",
            fs: "301 fs",
            fstext: "Free spin",
            price: "9.02K $",
            pricetext: "Bonus",
            namelink: "Go to casino",
            page: "2",
            benefits: [
              "Weekend deposit bonus up to 3150 + 50 FS",
              "Daily Drop & Wins 42 000",
              "100% Welcome Bonus up to 3 600 + 200 FS",
            ],
            arrimage: [
              "./img/visa.png",
              "./img/astropay.png",
              "./img/mifinity.png",
              "./img/jeton.png",
              "./img/ezeewallet.png",
              "./img/perfect-money.png",
              "./img/stickpay.png",
              "./img/paysafecard.png",
            ],
          },
        ],
      },

      {
        id: "5gringos", // story id
        photo: "./img/5gringos-popup.png", // story photo (or user photo)
        name: "5gringos", // story name (or user name)
        link: "https://yandex.ru", // story link (useless on story generated by script)
        lastUpdated: "", // last updated date in unix time format
        seen: false, // set true if user has opened

        items: [ // array of items
          // story item example
          {
            id: "5gringos", // item id
            type: "photo", // photo or video
            length: 3, // photo timeout or video length in seconds - uses 3 seconds timeout for images if not set
            src: "./img/5gringos-popup.png", // photo or video src
            preview: "./img/5gringos-popup.png", // optional - item thumbnail to show in the story carousel instead of the story defined image
            link: "https://yandex.ru", // a link to click on story
            linkText: "Go yandex", // link text
            time: "", // optional a date to display with the story item. unix timestamp are converted to "time ago" format
            seen: false, // set true if current user was read,
            stars: "9.66",
            fs: "330 fs",
            fstext: "Free spin",
            price: "9.2K $",
            pricetext: "Bonus",
            namelink: "Go to casino",
            page: "1",
          },
          {
            id: "5gringos", // item id
            type: "photo", // photo or video
            length: 3, // photo timeout or video length in seconds - uses 3 seconds timeout for images if not set
            src: "./img/5gringos-popup.png", // photo or video src
            preview: "./img/5gringos-popup.png", // optional - item thumbnail to show in the story carousel instead of the story defined image
            link: "https://yandex.ru", // a link to click on story
            linkText: "Go yandex", // link text
            time: "", // optional a date to display with the story item. unix timestamp are converted to "time ago" format
            seen: false, // set true if current user was read,
            stars: "9.66",
            fs: "330 fs",
            fstext: "Free spin",
            price: "9.2K $",
            pricetext: "Bonus",
            namelink: "Go to casino",
            page: "2",
            benefits: [
              "Weekend deposit bonus up to 3150 + 50 FS",
              "Daily Drop & Wins 42 000",
              "100% Welcome Bonus up to 3 600 + 200 FS",
            ],
            arrimage: [
              "./img/visa.png",
              "./img/astropay.png",
              "./img/mifinity.png",
              "./img/jeton.png",
              "./img/ezeewallet.png",
              "./img/perfect-money.png",
              "./img/stickpay.png",
              "./img/paysafecard.png",
            ],
          },
        ],
      },
    ]
  });