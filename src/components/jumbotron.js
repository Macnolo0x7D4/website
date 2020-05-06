import React from 'react'

import { Image } from 'react-bootstrap'
import { Col } from 'react-bootstrap'
import { Row } from 'react-bootstrap'
import { Container } from 'react-bootstrap'

export default () => (
  <section class="pt-4 pt-md-11 jumbo">
      <Container>
          <Row className="align-items-center">
              <Col md={4} lg={{ span: 5, order: 12 }} data-aos="fade-up" data-aos-duration="800" data-aos-delay="50" className="order-md-2">
                <Image className="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0" src={'/jumbotron.svg'} alt="Jumbotron"/>
              </Col>
              <Col data-aos="slide-up" data-aos-duration="800" data-aos-delay="100" md={7} lg={6} className="text order-md-1">
                  <h2 class="jumbo-title-black">Welcome to&nbsp;<br/></h2>
                  <h1 class="jumbo-title"><span class="jumbo-title-span">Macnolo Tech</span><br/></h1>
                  <p></p>
                  <h6 class="jumbo-subtitle">Create everything you think possible.<br/></h6>
              </Col>
          </Row>
      </Container>
  </section>
)
