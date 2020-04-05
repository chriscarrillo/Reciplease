import React from 'react'
import {RecipeCard} from '~/recipe/components/card'
import {CommonLayout} from '~/common/components/layout'

/**
 * Render root component representing the entire application.
 * @return React component
 */
export const AppRoot = () => {
  const children = <RecipeCard />
  return <CommonLayout>{children}</CommonLayout>
}
