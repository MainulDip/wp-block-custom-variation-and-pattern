import { registerBlockVariation } from '@wordpress/blocks'
import { __ } from '@wordpress/i18n'

const innerBlocks = [
  [
    'core/column',
    {},
    [
      [
        'core/heading',
        {
          backgroundColor: 'yellow',
          placeholder: 'Project Title',
          attributes: { style: 'background-color: yellow;' }
        }
      ]
    ]
  ],
  [
    'core/column',
    {},
    [
      ['core/heading', { content: 'Client' }],
      ['core/paragraph', { placeholder: 'Enter client info' }]
    ]
  ],
  [
    'core/column',
    {},
    [
      ['core/heading', { content: 'My Role' }],
      ['core/paragraph', { placeholder: 'Describe your role' }]
    ]
  ]
]

registerBlockVariation('core/group', {
  name: __('Custom Block Variation'),
  title: __('Custom Block Variation'),
  icon: 'portfolio',
  scope: ['inserter'],
  innerBlocks
})
