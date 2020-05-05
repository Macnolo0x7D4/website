import React from 'react'

import JSONReposData from '../../content/github-repos-data.json'
import JSONUserData from '../../content/github-user-data.json'

import { Container } from 'react-bootstrap'

export default () => (
   <Container>
    <h1>{JSONUserData.name}</h1>
    <p>{JSONUserData.bio}</p>
    <ul>
      {JSONReposData.map((data, index) => {
        return (
          <li>Language: {data.language}</li>
        )
      })}
    </ul>
   </Container>
)
