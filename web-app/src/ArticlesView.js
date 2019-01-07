import React from 'react';
import { graphql } from 'react-apollo';
import gql from 'graphql-tag';
import ArticleTeaser from './ArticleTeaser.js';

const query = gql`
query articlesQuery {
	articlesGraphqlArticlesView:nodeQuery{
  	entities {
    	id:entityId
    	title:entityLabel
		}
	}
}
`;

const withQuery = graphql(query, {
  props: ({ data: { loading, articlesGraphqlArticlesView } }) => ({
    loading,
    articles: articlesGraphqlArticlesView
  }),
});

const ArticlesView = ({ loading, articles }) => {
  if (loading) {
    return null;
  }
  return (
    <ul>
      {articles.entities.map(article => <li key={article.id}><ArticleTeaser article={article} /></li>)}
    </ul>
  )
};

export default withQuery(ArticlesView);
