import {noop} from 'lodash'
import {createContext} from 'react'

/** Pages app can display. */
export type AppPage = 'HOME' | 'LOGIN'

/** App context definition. */
export interface AppContext {
  page: AppPage
  setPage(page: AppPage): void
}

/** Default app context. */
export const DEFAULT_CONTEXT: AppContext = {
  page: 'HOME',
  setPage: noop,
}

/** App context. */
export const AppContext = createContext(DEFAULT_CONTEXT)
