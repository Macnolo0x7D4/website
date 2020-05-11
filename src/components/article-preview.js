import React from "react"

import { Container } from "react-bootstrap"
import { Row } from "react-bootstrap"
import { Col } from "react-bootstrap"
import { ButtonGroup } from "react-bootstrap"
import { Button } from "react-bootstrap"
import { Image } from "react-bootstrap"
import { Dropdown } from "react-bootstrap"
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome"
import { Link } from "gatsby"

export default proc => {
  return (
    <React.Fragment>
      <section
        className={
          proc.data.color === "true"
            ? "clean-block clean-info dark"
            : "clean-block clean-info light"
        }
      >
        <Container className="article-container">
          <Row className="align-items-center">
            <Col md={{ order: proc.data.inverted === "true" ? 1 : 12 }}>
              <h3>
                <Link to={proc.data.page_uri}>{proc.data.title}</Link>
              </h3>
              <div class="getting-started-info">
                <p class="text-justify">{proc.data.preview}</p>
                <ButtonGroup className="d-none d-lg-block">
                  {proc.data.github_url !== "" ? (
                    <Button
                      as="a"
                      variant="dark"
                      href={proc.data.github_url}
                      target="_blank"
                    >
                      View on GitHub&nbsp;
                      <FontAwesomeIcon icon={["fab", "github"]} />
                    </Button>
                  ) : (
                    ``
                  )}
                  {proc.data.playstore_url !== "" ? (
                    <Button
                      as="a"
                      variant="success"
                      href={proc.data.playstore_url}
                      target="_blank"
                    >
                      Get in on Google Play&nbsp;
                      <FontAwesomeIcon icon={["fab", "android"]} />
                    </Button>
                  ) : (
                    ``
                  )}
                </ButtonGroup>
                <Dropdown>
                  <Dropdown.Toggle
                    variant="primary"
                    id="dropdown-basic"
                    className="d-sm-none"
                    block
                  >
                    More options
                  </Dropdown.Toggle>
                  <Dropdown.Menu>
                    {proc.data.playstore_url !== "" ? (
                      <Dropdown.Item
                        variant="success"
                        href={proc.data.playstore_url}
                        target="_blank"
                      >
                        Get in on Google Play&nbsp;
                        <FontAwesomeIcon icon={["fab", "android"]} />
                      </Dropdown.Item>
                    ) : (
                      ``
                    )}
                    {proc.data.github_url !== "" ? (
                      <Dropdown.Item
                        variant="dark"
                        href={proc.data.github_url}
                        target="_blank"
                      >
                        View on GitHub&nbsp;
                        <FontAwesomeIcon icon={["fab", "github"]} />
                      </Dropdown.Item>
                    ) : (
                      ``
                    )}
                    {proc.data.page_uri !== "" ? (
                      <Dropdown.Item
                        variant="primary"
                        href={proc.data.page_uri}
                      >
                        See Website&nbsp;
                        <FontAwesomeIcon icon="file-alt" />
                      </Dropdown.Item>
                    ) : (
                      ``
                    )}
                  </Dropdown.Menu>
                </Dropdown>
              </div>
            </Col>
            <Col
              md={{ order: proc.data.inverted === "true" ? 12 : 1 }}
              className="d-flex justify-content-center aos-init aos-animate"
            >
              <Image
                className="image-zoom"
                width={proc.data.image2_uri === "" ? "auto" : "250px"}
                src={proc.data.image1_uri}
                thumbnail
              />
              {proc.data.image2_uri !== "" && (
                <Image
                  className="image-zoom d-none d-xl-inline"
                  width="250px"
                  src={proc.data.image2_uri}
                  thumbnail
                />
              )}
            </Col>
          </Row>
        </Container>
      </section>
    </React.Fragment>
  )
}
