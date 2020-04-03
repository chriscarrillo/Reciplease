import {noop} from 'lodash'
import {createContext} from 'react'

/** User login information. */
export interface UserLogin {
  username: string
  password: string
}

/** User context definition. */
export interface UserContext {
  loggedIn: boolean
  /** Handle user login process. */
  login(data: UserLogin): void
}

/** Default user context. */
export const DEFAULT_CONTEXT: UserContext = {
  loggedIn: false,
  login: noop,
}

/** User context. */
export const UserContext = createContext(DEFAULT_CONTEXT)
