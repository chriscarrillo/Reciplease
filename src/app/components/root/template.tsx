import React from 'react'
import 'bootstrap/dist/css/bootstrap.min.css'

/**
 * Render root component representing the entire application.
 * @return React component
 */
export const AppRoot = () => {
  const href =
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'
  const integrity =
    'sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh'

  return (
    <>
      <link
        crossOrigin="anonymous"
        href={href}
        integrity={integrity}
        rel="stylesheet"
      />
    </>
  )
}
