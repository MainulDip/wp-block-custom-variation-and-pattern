import { registerBlockVariation } from '@wordpress/blocks'
import { __ } from '@wordpress/i18n'
import './style.scss'

const innerBlocks = [
  [
    'core/column',
    {},
    [
      [
        'core/heading',
        {
          className: 'custom-shadow',
          // style: { color: { background: '#d62075' } },
          placeholder: 'Project Title'
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
