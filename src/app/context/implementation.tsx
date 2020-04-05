import React, {ReactNode, useMemo, useState} from 'react'
import {AppContext, AppPage} from '.'

interface Props {
  children: ReactNode
}

/**
 * Wraps with the AppContext Provider.
 * @return The component provided, wrapped in the context provider
 */
export const AppContextProvider = ({children}: Props) => {
  const [page, setPage] = useState<AppPage>('HOME')
  const appContext = useMemo<AppContext>(() => ({page, setPage}), [
    page,
    setPage,
  ])
  return (
    <AppContext.Provider value={appContext}>{children}</AppContext.Provider>
  )
}
