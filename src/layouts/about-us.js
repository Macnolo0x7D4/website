import React from "react"

import "../styles/theme.min.css"
import "../styles/master.css"

import "../utils/fontawesome.js"

import Application from "./application.js"
import AboutForm from "../components/about-form.js"

import { Container } from "react-bootstrap"
import { Row } from "react-bootstrap"

import { useStaticQuery, graphql } from "gatsby"

export default () => {
  const profiles = useStaticQuery(graphql`
    query ProfilesQuery {
      allProfileJson(sort: { fields: index, order: ASC }) {
        nodes {
          index
          name
          description
          image_uri
          github_url
          twitter_url
          reddit_url
          youtube_url
          instagram_url
        }
      }
    }
  `)
  return (
    <React.Fragment>
      <Application title="About Us - Macnolo Tech">
        <section class="clean-block about-us">
          <Container>
            <div className="block-heading animate__animated animate__fadeInDown">
              <h2 class="text-info">About Us</h2>
              <p>We are the Macnolo Tech Team</p>
            </div>
            <Row className="justify-content-center">
              {profiles.allProfileJson.nodes.map(profileData =>
                profileData.index === 1 ? (
                  <AboutForm
                    data={profileData}
                    effect="animate__animated animate__fadeInRight"
                  />
                ) : (
                  <AboutForm
                    data={profileData}
                    effect="animate__animated animate__fadeInLeft"
                  />
                )
              )}
            </Row>
          </Container>
        </section>
      </Application>
    </React.Fragment>
  )
}
