import React from "react"
import { Helmet } from "react-helmet"

import "../styles/theme.min.css"
import "../styles/master.css"

import "../utils/fontawesome.js"

import Navbar from "../components/navbar"
import Footer from "../components/footer"

export default (proc) => {
  return (
    <React.Fragment>
      <div className="application">
        <Helmet>
          <meta charSet="utf-8"/>
          <title>{proc.title}</title>
        </Helmet>
      </div>
      <header>
        <Navbar/>
      </header>
      <main className="page landing-page">
        {proc.children}
      </main>
      <Footer/>
    </React.Fragment>
  )
}