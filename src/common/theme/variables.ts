import '~/bootstrap/theme.scss'
import * as SCSS from './variables.module.scss'

/** Text. */
export const text = {
  fontSize: {
    base: SCSS.textFontSizeBase,
    h1: SCSS.textFontSizeH1,
    h2: SCSS.textFontSizeH2,
    h3: SCSS.textFontSizeH3,
    h4: SCSS.textFontSizeH4,
    mobile: {
      h1: SCSS.textFontSizeMobileH1,
      h2: SCSS.textFontSizeMobileH2,
      h3: SCSS.textFontSizeMobileH3,
      h4: SCSS.textFontSizeMobileH4,
    },
  },
  lineHeight: parseFloat(SCSS.textLineHeight),
}

/** Colors. */
export const colors = {
  dark: SCSS.colorsDark,
  light: SCSS.colorsLight,
  primary: SCSS.colorsPrimary,
  red: SCSS.colorsRed,
  secondary: SCSS.colorsSecondary,
  tertiary: SCSS.colorsTertiary,
}

/** Spacers. */
export const spacers = [
  SCSS.spacer0,
  SCSS.spacer1,
  SCSS.spacer2,
  SCSS.spacer3,
  SCSS.spacer4,
  SCSS.spacer5,
  SCSS.spacer6,
  SCSS.spacer7,
]

/** Width breakpoints. */
export const breakpoints = {
  max: {
    lg: SCSS.breakpointsMaxLg,
    md: SCSS.breakpointsMaxMd,
    sm: SCSS.breakpointsMaxSm,
    xs: SCSS.breakpointsMaxXs,
  },
  min: {
    lg: SCSS.breakpointsMinLg,
    md: SCSS.breakpointsMinMd,
    sm: SCSS.breakpointsMinSm,
    xl: SCSS.breakpointsMinXl,
  },
}
