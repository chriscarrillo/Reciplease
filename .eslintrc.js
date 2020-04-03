'use strict'

module.exports = {
  extends: './node_modules/@jupl/ts/lint',
  ignorePatterns: [
    'android/',
    '.cache/',
    '.coverage/',
    'dist/',
    'ios/',
    'public/',
  ],
  rules: {
    // A necessary evil
    '@typescript-eslint/ban-ts-ignore': 'off',

    // Remove once @types/react is fixed to allow things without fragments
    'react/jsx-no-useless-fragment': 'off',

    // IE
    'prefer-named-capture-group': 'off',
  },
}
