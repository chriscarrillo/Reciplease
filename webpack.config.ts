// Patch to fix tsconfig-paths plugin
Object.assign(process.env, {TS_NODE_PROJECT: ''})

/** Config export. */
// eslint-disable-next-line import/no-default-export
export {configuration as default} from './webpack.config.main'
