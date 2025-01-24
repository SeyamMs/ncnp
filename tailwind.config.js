import defaultTheme from "tailwindcss/defaultTheme";

module.exports = {
  safelist: [
    {
      pattern: /motion-delay-+/,
    },
  ],
  content: require("fast-glob").sync(
    [
      "source/**/*.{blade.php,blade.md,md,html,vue}",
      "!source/**/_tmp/*", // exclude temporary files
    ],
    { dot: true }
  ),
  theme: {
    extend: {
      fontFamily: {
        serif: ["Neo Sans Arabic", ...defaultTheme.fontFamily.serif],
      },

      colors: {
        primary: {
          DEFAULT: "#015363",
          50: "#02B2D5",
          100: "#02A8C8",
          200: "#0292AF",
          300: "#027D95",
          400: "#01687C",
          500: "#015363",
          600: "#014654",
          700: "#013A45",
          800: "#012D36",
          900: "#002026",
          950: "#001A1F",
        },
      },

      motionDelay: {
        "[100ms]": "100ms",
        "[200ms]": "200ms",
        "[300ms]": "300ms",
        "[400ms]": "400ms",
        "[500ms]": "500ms",
        "[600ms]": "600ms",
        "[700ms]": "700ms",
        "[800ms]": "800ms",
        "[900ms]": "900ms",
        "[1000ms]": "1000ms",
        "[1200ms]": "1200ms",
        "[1300ms]": "1300ms",
        "[1400ms]": "1400ms",
        "[1500ms]": "1500ms",
        "[1600ms]": "1600ms",
        "[1700ms]": "1700ms",
        "[1800ms]": "1800ms",
        "[1900ms]": "1900ms",
        "[2000ms]": "2000ms",
        "[2100ms]": "2100ms",
        "[2200ms]": "2200ms",
        "[2300ms]": "2300ms",
        "[2400ms]": "2400ms",
        "[2500ms]": "2500ms",
        "[2600ms]": "2600ms",
        "[2700ms]": "2700ms",
        "[2800ms]": "2800ms",
        "[2900ms]": "2900ms",
        "[3000ms]": "3000ms",
        "[3100ms]": "3100ms",
        "[3200ms]": "3200ms",
        "[3300ms]": "3300ms",
        "[3400ms]": "3400ms",
        "[3500ms]": "3500ms",
        "[3600ms]": "3600ms",
        "[3700ms]": "3700ms",
        "[3800ms]": "3800ms",
        "[3900ms]": "3900ms",
        "[4000ms]": "4000ms",
        "[4100ms]": "4100ms",
        "[4200ms]": "4200ms",
        "[4300ms]": "4300ms",
        "[4400ms]": "4400ms",
        "[4500ms]": "4500ms",
        "[4600ms]": "4600ms",
        "[4700ms]": "4700ms",
        "[4800ms]": "4800ms",
        "[4900ms]": "4900ms",
        "[5000ms]": "5000ms",
        5000: "5000ms",
      },
    },
  },
  plugins: [require("@tailwindcss/typography"), require("tailwindcss-motion")],
};
