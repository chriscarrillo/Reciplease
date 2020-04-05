import React from 'react'
import {render} from 'react-dom'
import {AppRoot} from '~/app/components/root'
import {AppContextProvider} from '~/app/context/implementation'

const providers = [AppContextProvider]

// Render application
const ID = 'root'
let container = document.getElementById(ID)
if (!container) {
  container = Object.assign(document.createElement('div'), {id: ID})
  document.body.appendChild(container)
}
const root = providers.reduce(
  (children, Wrapper) => <Wrapper>{children}</Wrapper>,
  <AppRoot />,
)
render(root, container)
