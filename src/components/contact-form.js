import React from "react"
import { Helmet } from "react-helmet"

import "../styles/theme.min.css"
import "../styles/master.css"

import Navbar from "../components/navbar"
import Footer from "../components/footer"

import { Container } from "react-bootstrap"
import { Form } from "react-bootstrap"
import { Button } from "react-bootstrap"

export default () => (
  <React.Fragment>
    <div className="application">
      <Helmet>
        <meta charSet="utf-8" />
        <title>Contact Us - Macnolo Tech</title>
      </Helmet>
    </div>
    <header>
      <Navbar />
    </header>
    <main className="page landing-page">
      <section class="clean-block clean-form dark">
        <Container>
          <div class="block-heading">
            <h2 class="text-info">Contact Us</h2>
            <p>
              If you want to contact us to do some software development or for
              any other reason, fill this form.
            </p>
          </div>
          <Form
            action="https://send.pageclip.co/NIkvjePYCYAXboAhV987FCg31F6bnrJG/contact-form"
            method="post"
          >
            <Form.Group>
              <Form.Label>Name</Form.Label>
              <Form.Control name="user" type="text" />
            </Form.Group>
            <Form.Group>
              <Form.Label>Subject</Form.Label>
              <Form.Control name="subject" type="text" />
            </Form.Group>
            <Form.Group>
              <Form.Label>Email</Form.Label>
              <Form.Control name="email" type="email" />
            </Form.Group>
            <Form.Group>
              <Form.Label>Message</Form.Label>
              <Form.Control as="textarea" name="text"></Form.Control>
            </Form.Group>
            <Form.Group>
              <Button variant="primary" type="submit" block>
                Send
              </Button>
            </Form.Group>
          </Form>
        </Container>
      </section>
    </main>
    <Footer />
  </React.Fragment>
)
