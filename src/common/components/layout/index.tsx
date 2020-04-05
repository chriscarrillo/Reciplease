import React, {ReactNode} from 'react'
// Import {ThemeProvider as BootstrapThemeProvider} from 'react-bootstrap'
import {ThemeProvider} from 'styled-components'
import {AppContextProvider} from '~/app/context/implementation'
import {theme} from '../../theme'
import 'bootstrap/scss/bootstrap.scss'

interface Props {
  children: ReactNode
}

/**
 * Render common page layout.
 * @return React component
 */
export const CommonLayout = ({children}: Props) => (
  <ThemeProvider theme={theme}>
    <AppContextProvider>{children}</AppContextProvider>
  </ThemeProvider>
)
