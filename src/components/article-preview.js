import React from 'react'

import { Container } from 'react-bootstrap'
import { Row } from 'react-bootstrap'
import { Col } from 'react-bootstrap'
import { ButtonGroup } from 'react-bootstrap'
import { Button } from 'react-bootstrap'
import { Image } from 'react-bootstrap'
import { Dropdown } from 'react-bootstrap'
import { Link } from 'gatsby'

export default (proc) => (
  <section class="clean-block clean-info dark">
      <Container className="article-container">
          <Row className="align-items-center">
              <Col md={6} data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                  <h3><Link to={proc.data.articleJson.page_uri}>{proc.data.articleJson.title}</Link></h3>
                  <div class="getting-started-info">
                      <p class="text-justify">{proc.data.articleJson.preview}</p>
                  <ButtonGroup className="d-none d-lg-block" data-aos="fade" data-aos-delay="100" data-aos-once="true">
                      <Button as="a" variant="dark" href={proc.data.articleJson.github_url} target="_blank">
                        View on GitHub&nbsp;
                        <span class="fab fa-github"/>
                      </Button>
                      <Button as="a" variant="success" href={proc.data.articleJson.playstore_url} target="_blank">
                        Get in on Google Play&nbsp;
                        <span class="fa fa-android btn-icon-prepend"/>
                      </Button>
                  </ButtonGroup>
                  <Dropdown>
                    <Dropdown.Toggle variant="primary" id="dropdown-basic" className="d-sm-none" block>
                      More options
                    </Dropdown.Toggle>
                    <Dropdown.Menu>
                      <Dropdown.Item variant="success" href={proc.data.articleJson.playstore_url} target="_blank">
                        Get in on Google Play&nbsp;
                        <span class="fa fa-android btn-icon-prepend"/>
                      </Dropdown.Item>
                      <Dropdown.Item variant="dark" href={proc.data.articleJson.github_url} target="_blank">
                        View on GitHub&nbsp;
                        <span class="fab fa-github"/>
                      </Dropdown.Item>
                      <Dropdown.Item variant="primary" href={proc.data.articleJson.page_uri}>
                        See Website&nbsp;
                        <span class="far fa-file-alt"/>
                      </Dropdown.Item>
                    </Dropdown.Menu>
                  </Dropdown>

                  </div>
              </Col>
              <Col md={6} data-aos="fade-left" data-aos-duration="800" data-aos-once="true" className="d-flex justify-content-center">
                <Image className="image-zoom" src={proc.data.articleJson.image1_uri} width="250px" thumbnail/>
                { proc.data.articleJson.image2_uri != "" && <Image className="image-zoom d-none d-xl-inline" src={proc.data.articleJson.image2_uri} width="250px" thumbnail/>}
              </Col>
          </Row>
      </Container>
  </section>
)
