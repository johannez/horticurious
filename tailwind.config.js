module.exports = {
  theme: {
    extend: {
      maxWidth: {
        '2xs': '16rem',
        'hd': '1280px'
      }
    },
    container: {
      center: true,
      padding: '2rem'
    },
    fontFamily: {
      'header': ['Josefin Sans', 'sans'],
      'body': ['Open Sans', 'sans']
    },
    colors: {
      'white': '#FFF',
      'black': '#000',
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
    },
    fontSize: {
      'xs': '.75rem',
      'sm': '.875rem',
      'base': '1rem',
      'lg': '1.125rem',
      'xl': '1.25rem',
      '2xl': '1.5rem',
      '3xl': '1.875rem',
      '4xl': '2.25rem',
      '5xl': '2.75rem',
      '6xl': '4rem',
      '7xl': '5rem'
    }
  },
  variants: {},
  plugins: []
}
