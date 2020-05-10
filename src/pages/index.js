import React from "react";

import '../styles/theme.min.css'
import '../styles/master.css'

import '../utils/fontawesome.js'

import Navbar from '../components/navbar'
import Footer from '../components/footer'

import Jumbotron from '../components/jumbotron'
import ArticlePreview from '../components/article-preview'

import { useStaticQuery, graphql } from 'gatsby'

export default () => {
  const articles_preview = useStaticQuery(graphql`
      query ArticlesPreview {
        allArticleJson {
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
      `);
  return (
  <React.Fragment>
    <header>
      <Navbar/>
    </header>
    <main className="page landing-page">
      <Jumbotron/>
      {
        articles_preview.allArticleJson.nodes.map(articleData => (
          <ArticlePreview data={articleData}/>
        ))
      }
    </main>
    <Footer/>
  </React.Fragment>
  )
}
