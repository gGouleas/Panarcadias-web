module.exports = {
  purge: {
    enabled: false,
    content: ['/homepage.html'],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    container: {
      center: true,
    },
    screens: {
      sm: "320px",
      md: "768px",
      lg: "1280px",
      xl: "1360px",
    },
    colors: {
      blue: "#002868",
      red: "#bf0a30",
      white: "#ffffff",
      smoke: "#f8f8f8",
      fade: "#eeeeee",
      grey: "#b6b6b6",
      transparent: "transparent",
    },
    fontFamily: {
      ssp: ["SourceSansPro", "serif"],
      pn: ["ProximaNova", "serif"],
    },
    letterSpacing: {
      base: "0px",
      wide: "0.9px",
      widest: "2px",
    },
    borderWidth: {
      DEFAULT: "1px",
      '0': "0",
      '1': "1px",
      '2': "2px",
      '3': "3px",
      '4': "4px",
      '6': "6px",
    },
    extend: {
      fontSize: {
        '10': "10px",
        '26': "26px",
      },
      spacing: {
        '0.5': "3px",
        '10': "10px",
        '15': "15px",
        '16': "16px",
        '18': "18px",
        '19': "19px",
        '20': "20px",
        '28': "28px",
        '30': "30px",
        '40': "40px",
        '44': "44px",
        '50': "50px",
        '60': "60px",
        '70': "70px",
        '80': "80px",
        '85': "85px",
        '100': "100px",
        '110': "110px",
        '130': "130px",
        '140': "140px",
        '180': "180px",
        '200': "200px",
        '210': "210px",
        '240': "240px",
        '250': "250px",
        '280': "280px",
        '300': "300px",
        '320': "320px",
        '380': "380px",
        '420': "420px",
        '450': "450px",
        '460': "460px",
        '475': "475px",
        '590': "590px",
        '620': "620px",
        '650': "650px",
        '660': "660px",
        '750': "750px",
        '1360': "1360px",
      },
      backgroundImage: {
        "header-img": "url('/components/backgrounds/bg_header.png')",
        "header-img-small": "url('/components/backgrounds/bg_header_small.png')",
        "circle-img": "url('/components/backgrounds/circle.png')",
        "stars-img": "url('/components/backgrounds/bg_center.png')",
        "clock-icon": "url('/components/icons/clock.png')",
        "weather-icon": "url('/components/icons/cloud-snow.png')",
        "user-icon": "url('/components/icons/user.png')",
        "user-blue-icon": "url('/components/icons/user-blue.svg')",
        "flag-icon": "url('/components/icons/GR.png')",
        "dropdown-icon": "url('/components/icons/down.svg')",
        "dropdown-blue-icon": "url('/components/icons/down-blue.svg')",
        "close-icon": "url('/components/icons/close.svg')",
        "burger-icon": "url('/components/icons/burger.svg')",
        "leftarrow-icon": "url('/components/icons/left.svg')",
        "mail-icon": "url('/components/icons/mail.png')",
        "greek-icon": "url('/components/icons/greek.png')",
        "arrow-icon": "url('/components/icons/circle.svg')",
        "red-line-icon": "url('/components/icons/red_line_icon.svg')",
        "phone-icon": "url('/components/icons/phone.svg')",
        "form-email-icon": "url('/components/icons/Icon-mail.svg')",
        "buttonarrow-icon": "url('/components/icons/button-arrow.svg')",
        "backtotop-icon": "url('/components/icons/to\ top.svg')",
        "facebook-icon": "url('/components/icons/facebook.svg')",
        "twitter-icon": "url('/components/icons/twitter.svg')",
        "linkedin-icon": "url('/components/icons/glinkedin.svg')",
        "instagram-icon": "url('/components/icons/instagram.svg')",
        "youtube-icon": "url('/components/icons/youtube.svg')",
      },
    },
  },
  variants: {
    display: ['responsive', 'group-hover', 'group-focus'],
    extend: {},
  },
  plugins: [],
};
