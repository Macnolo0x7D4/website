import React from "react";

import '../styles/theme.min.css'
import '../styles/master.css'

import Navbar from '../components/navbar'
import Footer from '../components/footer'

import Jumbotron from '../components/jumbotron'
import ArticlePreview from '../components/article-preview'

import { useStaticQuery, graphql } from 'gatsby'

export default () => {
  const data = useStaticQuery(graphql`
      query MyQuery {
        articleJson {
          image1_uri
          image2_uri
          github_url
          page_uri
          playstore_url
          preview
          title
        }
      }
      `);
      console.log(data);
  return (
  <React.Fragment>
    <header>
      <Navbar/>
    </header>
    <main className="page landing-page">
      <Jumbotron/>
      <ArticlePreview data={data}/>
    </main>
    <Footer/>
  </React.Fragment>
  )
}
