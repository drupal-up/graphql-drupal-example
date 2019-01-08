import React from 'react';
import gql from 'graphql-tag';
import { Query } from 'react-apollo';

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

const NodesView = () => (
			<Query query={GET_NODES}>
				{({ loading, error, data }) => {
					if (loading) return <div>Loading...</div>;
					if (error) return <div>Error :(</div>;
					return (
						<ul>
							{
								data.nodeQuery.entities.map(
									node => <li key={node.id}><h3>{node.title}</h3></li>
								)
							}
						</ul>
					)
				}}
			</Query>
    )

export default NodesView;
