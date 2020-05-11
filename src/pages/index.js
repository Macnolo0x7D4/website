import React from "react"

import "../styles/theme.min.css"
import "../styles/master.css"

import "../styles/aos.scss"

import "../utils/fontawesome.js"

import Application from "../layouts/application"

import Jumbotron from "../components/jumbotron"
import ArticlePreview from "../components/article-preview"

import { useStaticQuery, graphql } from "gatsby"

export default () => {
  const articles_preview = useStaticQuery(graphql`
    query ArticlesPreview {
      allArticleJson(sort: { order: ASC, fields: index }) {
        nodes {
          title
          color
          github_url
          image1_uri
          image2_uri
          inverted
          page_uri
          playstore_url
          preview
        }
      }
    }
  `)
  return (
    <Application title={"Home - Macnolo Tech"}>
      <Jumbotron />
      {articles_preview.allArticleJson.nodes.map(articleData => (
        <ArticlePreview data={articleData} />
      ))}
    </Application>
  )
}
