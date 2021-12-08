'use strict';

// eslint-disable-next-line no-unused-vars
const config = {
  style: 'mapbox://styles/mapbox/streets-v11',
  accessToken:
    'pk.eyJ1IjoiY2ZpZWJlciIsImEiOiJja3J3aG44MGIwZ3IzMm9vN2NvajczZzJwIn0.B9P8F_VRLzdMtl2TNgzZpg',
  CSV: './leadingbyexample.csv',
  center: [-77.0365581,38.8949924],
  zoom: 2,
  maxzoom:5,
  title: 'Federal Agencies Leading by Example',
  description:
    'Federal agencies across the country are taking action now to implement the President\'s Federal Sustainability Plan and Executive Order.',
  sideBarInfo: ['Location_Name', 'Snippet'],
  popupInfo: ['Popup'],
  url: ['URL'],
  image: ['Image'],
  filters: [
    {
      type: 'dropdown',
      title: 'Select Agency: ',
      columnHeader: 'Agency',
      listItems: [
        'Department of Defense',
        'Department of Energy',
        'Department of Homeland Security',
        'Department of Transportation',
        'Department of Veterans Affairs',
        'U.S. Army Corps of Engineers',
      ],
    },
    {
      type: 'dropdown',
      title: 'Project Element: ',
      columnHeader: 'Type',
      listItems: [
        'Carbon Pollution-Free Electricity', 
        'Zero-Emission Vehicle Acquisitions', 
        'Net-Zero Procurement', 
        'Net-Zero Emissions Buildings',
        'Net-Zero Emissions Operations', 
        'Climate Resilient Infrastructure and Operations', 
        'Climate- and Sustainability-Focused Workforce', 
        'Environmental Justice and Equity-Focused Operations', 
        'Domestic and Global Partnerships',
      ], 
    },
    {
      type: 'dropdown',
      title: 'Select State: ',
      columnHeader: 'State',
      listItems: [
        'CA',
        'CO',
        'CT',
        'DC',
        'HI',
        'LA',
        'MA',
        'MS',
        'NY',
      ],
    },
  ],
};
