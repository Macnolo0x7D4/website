import React from 'react'

import { Container } from 'react-bootstrap'
import { Row } from 'react-bootstrap'
import { Col } from 'react-bootstrap'
import { Link } from 'gatsby'

export default () => (
  <footer className="page-footer dark">
      <Container>
          <Row>
              <Col sm={3}>
                  <h5>Get started</h5>
                  <ul>
                      <li>
                        <Link to="/">Home</Link>
                      </li>

                      <li>
                        <Link to="/downloads">Content</Link>
                      </li>
                  </ul>
              </Col>
              <Col sm={3}>
                  <h5>About us</h5>
                  <ul>
                      <li>
                        <Link to="#">Contact us</Link>
                      </li>
                  </ul>
              </Col>
              <Col sm={3}>
                  <h5>Support</h5>
                  <ul>
                      <li>
                        <Link to="#">FAQ</Link>
                      </li>
                      <li>
                        <Link href="#">Forums</Link>
                      </li>
                  </ul>
              </Col>
          </Row>
      </Container>
      <div className="footer-copyright">
          <p>© 2020 - Copyright - Macnolo Tech</p>
      </div>
  </footer>
)
