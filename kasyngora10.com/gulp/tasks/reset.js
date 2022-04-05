import del from 'del';

export const reset = () => {
  return del(app.path.clean);
}

export const resetBuild = () => {
  return del(app.path.cleanBuild);
}