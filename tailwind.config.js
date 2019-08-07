module.exports = {
  theme: {
    screens: {
      'xxl': '1440px'
    },
    container: {
      center: true,
      padding: '2rem'
    },
    colors: {
      'white': '#FFF',
      gray: {
        '100': '#f5f5f5',
        '200': '#eeeeee',
        '300': '#e0e0e0',
        '400': '#bdbdbd',
        '500': '#9e9e9e',
        '600': '#757575',
        '700': '#616161',
        '800': '#424242',
        '900': '#212121',
      },
      'green': '#058758',
      'teal': '#068587'
    }
  },
  variants: {},
  plugins: [
    function({ addBase, config }) {
      addBase({
        'h1': { 
          fontSize: '5rem',
          lineHeight: '1',
          marginBottom: '1rem'
        },
        'h2': { fontSize: config('theme.fontSize.xl') },
        'h3': { fontSize: config('theme.fontSize.lg') },
      })
    }
  ]
}
