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
          className: 'hello-World',
          // style: { color: { background: '#d62075' } },
          placeholder: 'Project Title',
          attributes: { style: { color: { background: '#3b20d6' } } }
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
