import React from 'react'
import {Button, Card} from 'react-bootstrap'

/**
 * Render recipe card.
 * @return React component
 */
export const RecipeCard = () => (
  <Card>
    <Card.Body>
      <Card.Title>Recipe Title</Card.Title>
      <Card.Text>Recipe info and description goes here.</Card.Text>
      <Button>See full recipe</Button>
    </Card.Body>
  </Card>
)
