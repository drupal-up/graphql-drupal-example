import React from 'react';
import gql from 'graphql-tag';
import { Query } from 'react-apollo';
import ArticleTeaser from './ArticleTeaser';

const GET_NODES = gql`
query articlesQuery {
	nodeQuery{
  	entities {
    	id:entityId
    	title:entityLabel
		}
	}
}
`;

const ArticlesView = () => (
			<Query query={GET_NODES}>
				{({ loading, error, data }) => {
					if (loading) return <div>Loading...</div>;
					if (error) return <div>Error :(</div>;
					return (
						<ul>
							{data.nodeQuery.entities.map(article => <li key={article.id}><ArticleTeaser article={article} /></li>)}
						</ul>
					)
				}}
			</Query>
    )

export default ArticlesView;
