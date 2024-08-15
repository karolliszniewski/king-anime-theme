module.exports = {
  content: [
    // https://tailwindcss.com/docs/content-configuration
    './*.php',
    './inc/**/*.php',
    './templates/**/*.php',
    './template-parts/*.php',
    './safelist.txt',
    './assets/**/*.css'
    //'./**/*.php', // recursive search for *.php (be aware on every file change it will go even through /node_modules which can be slow, read doc)
  ],
  safelist: [
    'text-center'
    //{
    //  pattern: /text-(white|black)-(200|500|800)/
    //}
  ],
  theme: {
    extend: {
      colors: {
        'stone-gray': '#353C47',
        'background-base': '#3C4A5F',
        'yellow-theme': '#5795F7'
      },
      height: {
        'full-without-header-mobile': 'calc(100vh - 3rem)',
        'full-without-header-desktop': 'calc(100vh - 5rem)',
      },
    }
  },
  plugins: []
}