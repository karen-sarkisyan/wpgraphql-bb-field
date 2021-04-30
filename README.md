A simple WordPress plugin exposing a boolean `usesBuilder` field for every page, which is set to `true` if the page uses Beaver Builder. It adds the field by extending WPGraphQL.

You might want to use this plugin if you use:
- WPGraphQL
- Beaver Builder

### Instructions

Download and install as any WP plugin and activate. You will see a new field `usesBuilder` for `page` nodes in your GraphQL schema.

If the page uses Beaver Builder, the field will resolve to `true`, otherwise to `false`.

### Example use case

I use the `usesBuilder` field in Gatsby to prevent gatsby-node.js from programmatically recreating pages that use BB in WordPress. Mostly because they turn out ugly, and it makes more sense for me to build them with React/MDX.