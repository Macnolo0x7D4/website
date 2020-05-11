const path = require("path")

exports.createPages = async ({ graphql, actions }) => {
  actions.createPage({
    path: "contact-us",
    component: path.resolve("./src/layouts/contact-us.js"),
  }),
  actions.createPage({
    path: "about-us",
    component: path.resolve("./src/layouts/about-us.js"),
  })
}
