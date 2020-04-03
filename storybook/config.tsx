import {addDecorator, configure} from '@storybook/react'
import React from 'react'

// Load all stories defined in our codebase
const loadStories = () => {
  const scopedRequire = require.context(
    '../src',
    true,
    /\/(?:.+\.)?stor(?:y|ies)\.tsx$/,
  )
  scopedRequire.keys().forEach(scopedRequire)
}

// Add global styling to all stories. By default set context to Gatsby.
addDecorator(story => <>{story()}</>)

configure(loadStories, module)
